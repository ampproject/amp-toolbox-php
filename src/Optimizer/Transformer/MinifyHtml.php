<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use AmpProject\Extension;
use AmpProject\Optimizer\Configuration\MinifyHtmlConfiguration;
use AmpProject\Optimizer\Error\InvalidJson;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;
use AmpProject\Optimizer\TransformerConfiguration;
use AmpProject\Tag;
use DOMComment;
use DOMNode;
use DOMText;

/**
 * Transformer that that minifies HTML.
 *
 * @package ampproject/amp-toolbox
 */
final class MinifyHtml implements Transformer
{

    /**
     * Configuration store to use.
     *
     * @var TransformerConfiguration
     */
    private $configuration;

    /**
     * Holds the current mustache template depth value.
     *
     * @var int
     */
    private $mustacheTemplateDepth = 0;

    /**
     * Instantiate a MinifyHtml object.
     *
     * @param TransformerConfiguration $configuration Configuration store to use.
     */
    public function __construct(TransformerConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * Apply transformations to the provided DOM document.
     *
     * @param Document        $document DOM document to apply the transformations to.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     * @return void
     */
    public function transform(Document $document, ErrorCollection $errors)
    {
        if (! $this->configuration->get(MinifyHtmlConfiguration::MINIFY)) {
            return;
        }

        // Recursively walk through all nodes and minify if possible.
        $nodesToRemove = $this->minifyNode($document, $errors);

        foreach ($nodesToRemove as $nodeToRemove) {
            if ($nodeToRemove instanceof DOMNode) {
                $nodeToRemove->parentNode->removeChild($nodeToRemove);
            }
        }
    }

    /**
     * Apply minification to a DOM node.
     *
     * @param DOMNode         $node                  Node to apply the transformations to.
     * @param ErrorCollection $errors                Collection of errors that are collected during transformation.
     * @param bool            $canCollapseWhitespace Optional. Whether whitespace can be collapsed. Defaults to true.
     * @param bool            $inBody                Optional. Whether the node is in the body. Defaults to false.
     * @return DOMNode[] Array of nodes to be removed.
     */
    private function minifyNode(DOMNode $node, ErrorCollection $errors, $canCollapseWhitespace = true, $inBody = false)
    {
        $nodesToRemove = [];

        if ($node instanceof DOMText) {
            $nodesToRemove = $this->minifyTextNode($node, $canCollapseWhitespace, $inBody);
        } elseif ($node instanceof DOMComment) {
            $nodesToRemove = $this->minifyCommentNode($node);
        } elseif ($node instanceof Element && $node->tagName === Tag::SCRIPT) {
            $this->minifyScriptNode($node, $errors);
        }

        // Update options based on the current node.
        if (isset($node->tagName)) {
            if ($canCollapseWhitespace && !$this->canCollapseWhitespace($node->tagName)) {
                $canCollapseWhitespace = false;
            }

            if ($node->tagName === Tag::HEAD || $node->tagName === Tag::HTML) {
                $inBody = false;
            } elseif ($node->tagName === Tag::BODY) {
                $inBody = true;
            }
        }

        if ($node->hasChildNodes()) {
            $isNodeMustacheTemplate = $this->isMustacheTemplate($node);

            if ($isNodeMustacheTemplate) {
                $this->mustacheTemplateDepth++;
            }

            foreach ($node->childNodes as $childNode) {
                $nodesToRemove = array_merge(
                    $nodesToRemove,
                    $this->minifyNode($childNode, $errors, $canCollapseWhitespace, $inBody)
                );
            }

            if ($isNodeMustacheTemplate) {
                $this->mustacheTemplateDepth--;
            }
        }

        return $nodesToRemove;
    }

    /**
     * Minify a text type DOM node.
     *
     * @param DOMText $node                  Text to apply the transformations to.
     * @param bool    $canCollapseWhitespace Optional. Whether whitespace can be collapsed. Defaults to true.
     * @param bool    $inBody                Optional. Whether the node is in the body. Defaults to false.
     * @return DOMNode[] Array of nodes to be removed.
     */
    private function minifyTextNode(DOMText $node, $canCollapseWhitespace = true, $inBody = false)
    {
        if (! $node->data || ! $this->configuration->get(MinifyHtmlConfiguration::COLLAPSE_WHITESPACE)) {
            return [];
        }

        if ($canCollapseWhitespace) {
            $node->data = $this->normalizeWhitespace($node->data);
        }

        if (! $inBody) {
            $node->data = trim($node->data);
        }

        // Remove empty nodes.
        if (strlen($node->data) === 0) {
            return [$node];
        }

        return [];
    }

    /**
     * Minify/remove a comment node.
     *
     * @param DOMComment $node Comment to apply the transformations to.
     * @return DOMNode[] Array of nodes to be removed.
     */
    private function minifyCommentNode(DOMComment $node)
    {
        if (! $node->data || ! $this->configuration->get(MinifyHtmlConfiguration::REMOVE_COMMENTS)) {
            return [];
        }

        $commentIgnorePattern = $this->configuration->get(MinifyHtmlConfiguration::COMMENT_IGNORE_PATTERN);
        if (! empty($commentIgnorePattern) && preg_match($commentIgnorePattern, $node->data)) {
            return [];
        }

        // In case the main $document has `securedDoctype`.
        if (preg_match('/^amp-doctype html/i', $node->data)) {
            return [];
        }

        if ($this->mustacheTemplateDepth > 0 && preg_match($this->getMustacheTagPattern(), $node->data)) {
            return [];
        }

        return [$node];
    }

    /**
     * Minify a script node.
     *
     * @param Element         $node   Element to apply the transformations to.
     * @param ErrorCollection $errors Collection of errors that are collected during transformation.
     */
    private function minifyScriptNode(Element $node, ErrorCollection $errors)
    {
        if (! $this->configuration->get(MinifyHtmlConfiguration::MINIFY_JSON) || ! $this->isJSON($node)) {
            return;
        }

        foreach ($node->childNodes as $childNode) {
            if (! $childNode instanceof DOMText || empty($childNode->data)) {
                continue;
            }
            $this->minifyJson($childNode, $errors);
        }
    }

    /**
     * Check whether a tag is allowed to collapse whitespace.
     *
     * @param string $tagName The allowed tag name.
     * @return bool Whether whitespace can be collapsed.
     */
    private function canCollapseWhitespace($tagName)
    {
        return (
            Tag::SCRIPT !== $tagName && Tag::STYLE !== $tagName && Tag::PRE !== $tagName && Tag::TEXTAREA !== $tagName
        );
    }

    /**
     * Normalize whitespace for a string data.
     *
     * @param string $data The data to be normalized.
     * @return string Normalized string data.
     */
    private function normalizeWhitespace($data)
    {
        return preg_replace('/[\f\n\r\t\v ]{2,}/', ' ', $data);
    }

    /**
     * Checks if a node is JSON type.
     *
     * @param Element $node The element node need to be checked.
     * @return bool Whether the checked element is a JSON snippet.
     */
    private function isJSON(Element $node)
    {
        $type = $node->getAttribute(Attribute::TYPE);
        return $type === Attribute::TYPE_JSON || $type === Attribute::TYPE_LD_JSON;
    }

    /**
     * Minify JSON node.
     *
     * @param DOMText         $node   The node to be minified.
     * @param ErrorCollection $errors Collection of errors that are collected during transformation.
     */
    private function minifyJson(DOMText $node, ErrorCollection $errors)
    {
        $decodedData = json_decode($node->data);

        if (JSON_ERROR_NONE !== json_last_error()) {
            $errors->add(InvalidJson::fromLastErrorMsgAfterDecoding());
        }

        if (! empty($decodedData)) {
            $data = json_encode($decodedData, JSON_HEX_AMP | JSON_HEX_TAG | JSON_UNESCAPED_SLASHES);

            if (JSON_ERROR_NONE !== json_last_error()) {
                $errors->add(InvalidJson::fromLastErrorMsgAfterEncoding());
            }

            // PHP uses uppercase letters for angle bracket codes, so convert them into lowercase.
            $node->data = str_replace(['\u003E', '\u003C'], ['\u003e', '\u003c'], $data);
        }
    }

    /**
     * Checks if a node is an amp-mustache template element.
     *
     * @param DOMNode $node The dom node to be checked.
     * @return bool Whether the checked node is an amp-mustache template element.
     */
    private function isMustacheTemplate(DOMNode $node)
    {
        if (
            $node instanceof Element &&
            $node->tagName === Tag::TEMPLATE &&
            $node->getAttribute(Attribute::TYPE) === Extension::MUSTACHE
        ) {
            return true;
        }

        return false;
    }

    /**
     * Get a regular expression that matches all amp-mustache tags while consuming whitespace.
     *
     * @return string Regex pattern to match amp-mustache tags with whitespace.
     */
    private function getMustacheTagPattern()
    {
        static $tagPattern = null;

        if (null === $tagPattern) {
            $delimiter = ':';
            $tags      = [];
            $tokens    = [
                '{{{',
                '}}}',
                '{{#',
                '{{^',
                '{{/',
                '{{',
                '}}',
            ];

            foreach ($tokens as $token) {
                if ('{' === $token[0]) {
                    $tags[] = preg_quote($token, $delimiter) . '\s*';
                } else {
                    $tags[] = '\s*' . preg_quote($token, $delimiter);
                }
            }

            $tagPattern = $delimiter . implode('|', $tags) . $delimiter;
        }

        return $tagPattern;
    }
}
