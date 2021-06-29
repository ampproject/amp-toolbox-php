<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
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
     * @param bool            $canCollapseWhitespace Whether whitespace can be collapsed.
     * @param bool            $inBody                Whether the node is in the body.
     * @return array
     */
    private function minifyNode(DOMNode $node, ErrorCollection $errors, $canCollapseWhitespace = true, $inBody = false)
    {
        $nodesToRemove = [];

        if ($node instanceof DOMText) {
            $nodesToRemove[] = $this->minifyTextNode($node, $canCollapseWhitespace, $inBody);
        } elseif ($node instanceof DOMComment) {
            $nodesToRemove[] = $this->minifyCommentNode($node);
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
            foreach ($node->childNodes as $childNode) {
                $nodesToRemove = array_merge(
                    $nodesToRemove,
                    $this->minifyNode($childNode, $errors, $canCollapseWhitespace, $inBody)
                );
            }
        }

        return $nodesToRemove;
    }

    /**
     * Minify a text type DOM node.
     *
     * @param DOMText $node                  Text to apply the transformations to.
     * @param bool    $canCollapseWhitespace Whether whitespace can be collapsed.
     * @param bool    $inBody                Whether the node is in the body.
     * @return DOMText|null Returns an empty DOMText if found, otherwise null.
     */
    private function minifyTextNode(DOMText $node, $canCollapseWhitespace = true, $inBody = false)
    {
        if (! $node->data || ! $this->configuration->get(MinifyHtmlConfiguration::COLLAPSE_WHITESPACE)) {
            return null;
        }

        if ($canCollapseWhitespace) {
            $node->data = $this->normalizeWhitespace($node->data);
        }

        if (! $inBody) {
            $node->data = trim($node->data);
        }

        // Remove empty nodes.
        if (strlen($node->data) === 0) {
            return $node;
        }

        return null;
    }

    /**
     * Minify/remove a comment node.
     *
     * @param DOMComment $node Comment to apply the transformations to.
     * @return DOMComment|null Returns a DOMComment node if matches the conditions, otherwise null.
     */
    private function minifyCommentNode(DOMComment $node)
    {
        if (! $node->data || ! $this->configuration->get(MinifyHtmlConfiguration::REMOVE_COMMENTS)) {
            return null;
        }

        if (preg_match($this->configuration->get(MinifyHtmlConfiguration::COMMENT_IGNORE_PATTERN), $node->data)) {
            return null;
        }

        // In case the main $document has `securedDoctype`.
        if (preg_match('/^amp-doctype html/i', $node->data)) {
            return null;
        }

        return $node;
    }

    /**
     * Minify a script node.
     *
     * @param Element         $node     Element to apply the transformations to.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     * @return void
     */
    private function minifyScriptNode(Element $node, ErrorCollection $errors)
    {
        $isJSON = $this->isJSON($node);

        if ($node->hasChildNodes()) {
            foreach ($node->childNodes as $childNode) {
                if (empty($childNode->data)) {
                    continue;
                }

                if (
                    $isJSON
                    && $this->configuration->get(MinifyHtmlConfiguration::MINIFY_JSON)
                    && $childNode instanceof DOMText
                ) {
                    $this->minifyJson($childNode, $errors);
                }
            }
        }
    }

    /**
     * Check whether a tag is allowed to collapse whitespace
     *
     * @param string $tagName The allowed tag name.
     * @return bool
     */
    private function canCollapseWhitespace($tagName)
    {
        return (
            Tag::SCRIPT !== $tagName && Tag::STYLE !== $tagName && Tag::PRE !== $tagName && Tag::TEXTAREA !== $tagName
        );
    }

    /**
     * Normalize whitespace for a string data
     *
     * @param string $data The data to be normalized.
     * @return string
     */
    private function normalizeWhitespace($data)
    {
        return preg_replace('/[\f\n\r\t\v ]{2,}/', ' ', $data);
    }

    /**
     * Checks if a node is JSON type
     *
     * @param Element $node The element node need to be checked.
     * @return bool
     */
    private function isJSON(Element $node)
    {
        $type = $node->getAttribute(Attribute::TYPE);
        return $type === Attribute::TYPE_JSON || $type === Attribute::TYPE_LD_JSON;
    }

    /**
     * Minify JSON node
     *
     * @param DOMText         $node     The node to be minified.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     * @return void
     */
    private function minifyJson(DOMText $node, ErrorCollection $errors)
    {
        $decodedData = json_decode($node->data);

        if (json_last_error()) {
            $errors->add(InvalidJson::fromLastErrorMsgAfterDecoding());
        }

        if (! empty($decodedData)) {
            $data = json_encode($decodedData, JSON_HEX_AMP | JSON_HEX_TAG | JSON_UNESCAPED_SLASHES);

            if (json_last_error()) {
                $errors->add(InvalidJson::fromLastErrorMsgAfterEncoding());
            }

            // PHP uses uppercase letters for angle bracket codes, so convert them into lowercase.
            $node->data = str_replace(['\u003E', '\u003C'], ['\u003e', '\u003c'], $data);
        }
    }
}
