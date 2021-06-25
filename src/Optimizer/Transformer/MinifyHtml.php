<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use AmpProject\Optimizer\Configuration\MinifyHtmlConfiguration;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;
use AmpProject\Optimizer\TransformerConfiguration;
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
     * Store nodes for later deletion
     *
     * @var array
     */
    private $nodesToRemove;

    /**
     * Instantiate an OptimizeAmpBind object.
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
        if (! $this->configuration->get(MinifyHtmlConfiguration::MINIFIY)) {
            return;
        }

        /*
         * Store nodes for later deletion to avoid changing the tree structure
         * while iterating the DOM.
         */
        $this->nodesToRemove = [];

        // Recursively walk through all nodes and minify if possible.
        $this->minifyNode($document, $this->configuration->toArray());

        foreach ($this->nodesToRemove as $nodeToRemove) {
            $nodeToRemove->parentNode->removeChild($nodeToRemove);
        }
    }

    /**
     * Apply minification to a DOM node
     *
     * @param DOMNode $node Node to apply the transformations to.
     * @param array   $opts Configuration options.
     * @return void
     */
    private function minifyNode(DOMNode $node, $opts)
    {
        if ($node instanceof DOMText) {
            $this->minifyTextNode($node, $opts);
        } elseif ($node instanceof DOMComment) {
            $this->minifyCommentNode($node, $opts);
        } elseif ($node instanceof Element && $node->tagName === 'script') {
            $this->minifyScriptNode($node, $opts);
        }

        // Update options based on the current node.
        if (isset($node->tagName)) {
            if (
                $opts[MinifyHtmlConfiguration::CAN_COLLAPSE_WHITESPACE]
                && !$this->canCollapseWhitespace($node->tagName)
            ) {
                $opts[MinifyHtmlConfiguration::CAN_COLLAPSE_WHITESPACE] = false;
            }

            if ($node->tagName === 'head' || $node->tagName === 'html') {
                $opts[MinifyHtmlConfiguration::IN_BODY] = false;
            } elseif ($node->tagName === 'body') {
                $opts[MinifyHtmlConfiguration::IN_BODY] = true;
            }
        }

        if ($node->hasChildNodes()) {
            foreach ($node->childNodes as $childNode) {
                $this->minifyNode($childNode, $opts);
            }
        }
    }

    /**
     * Minify a Text type DOM node
     *
     * @param DOMText $node Text to apply the transformations to.
     * @param array   $opts Configuration options.
     * @return void
     */
    private function minifyTextNode(DOMText $node, $opts)
    {
        if (! $node->data || ! $opts[MinifyHtmlConfiguration::COLLAPSE_WHITESPACE]) {
            return;
        }

        if ($opts[MinifyHtmlConfiguration::CAN_COLLAPSE_WHITESPACE]) {
            $node->data = $this->normalizeWhitespace($node->data);
        }

        if (! $opts[MinifyHtmlConfiguration::IN_BODY]) {
            $node->data = trim($node->data);
        }

        // Remove empty nodes.
        if (strlen($node->data) === 0) {
            $this->nodesToRemove[] = $node;
        }
    }

    /**
     * Minify/remove a comment node
     *
     * @param DOMComment $node Comment to apply the transformations to.
     * @param array      $opts Configuration options.
     * @return void
     */
    private function minifyCommentNode(DOMComment $node, $opts)
    {
        if (! $node->data || ! $opts[MinifyHtmlConfiguration::REMOVE_COMMENTS]) {
            return;
        }

        if (preg_match($opts[MinifyHtmlConfiguration::COMMENT_IGNORE_PATTERN], $node->data)) {
            return;
        }

        // @todo: Need to handle the scenario when there is a comment before DOCTYPE declaration.
        // In case of the main $document has `securedDoctype`.
        // if (preg_match('/^amp-doctype html/i', $node->data)) {return;}

        $this->nodesToRemove[] = $node;
    }

    /**
     * Minify a script node
     *
     * @param Element $node Element to apply the transformations to.
     * @param array   $opts Configuration options.
     * @return void
     */
    private function minifyScriptNode(Element $node, $opts)
    {
        $isJSON = $this->isJSON($node);
        $isAmpScript = ! $isJSON && $this->isInlineAmpScript($node);

        if ($node->hasChildNodes()) {
            foreach ($node->childNodes as $childNode) {
                if (empty($childNode->data)) {
                    continue;
                }

                if ($isJSON && $opts[MinifyHtmlConfiguration::MINIFY_JSON]) {
                    $this->minifyJson($childNode);
                } elseif ($isAmpScript && $opts[MinifyHtmlConfiguration::MINIFY_AMP_SCRIPT]) {
                    $this->minifyAmpScript($childNode);
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
            'script' !== $tagName && 'style' !== $tagName && 'pre' !== $tagName && 'textarea' !== $tagName
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
        $type = $node->attributes->getNamedItem('type');
        return isset($type->value) && ($type->value === 'application/json' || $type->value === 'application/ld+json');
    }

    /**
     * Checks if a node is meant to be an inline amp-script
     *
     * @param Element $node The element node need to be checked.
     * @return bool
     */
    private function isInlineAmpScript($node)
    {
        $type = $node->attributes->getNamedItem('type');
        $target = $node->attributes->getNamedItem('target');
        return (
            isset($type->value)
            && isset($target->value)
            && ($type->value === 'text/plain' || $target->value === 'amp-script')
        );
    }

    /**
     * Minify JSON node
     *
     * @param DOMText $node The node to be minified.
     * @return void
     */
    private function minifyJson(DOMText $node)
    {
        $decodedData = json_decode($node->data);

        if (! empty($decodedData)) {
            $data = json_encode($decodedData, JSON_HEX_AMP | JSON_HEX_TAG | JSON_UNESCAPED_SLASHES);
            // PHP uses uppercase letters for angle bracket codes, so convert them into lowercase.
            $node->data = str_replace(['\u003E', '\u003C'], ['\u003e', '\u003c'], $data);
        }
    }

    /**
     * Minify AMP script
     *
     * @param DOMText $node The node to be minified.
     * @return void
     */
    private function minifyAmpScript($node)
    {
        // @todo: complete this method
    }
}
