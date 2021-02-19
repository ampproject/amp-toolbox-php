<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Amp;
use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use AmpProject\Dom\NodeWalker;
use AmpProject\Extension;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;
use AmpProject\Tag;
use AmpProject\Validator\Spec;
use Exception;

final class AutoExtensions implements Transformer
{

    /**
     * Validator spec instance.
     *
     * @var Spec
     */
    private $spec;

    /**
     * AutoExtensions constructor.
     *
     * @param Spec $spec Validator spec instance.
     */
    public function __construct(Spec $spec)
    {
        $this->spec = $spec;
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
        $extensionScripts = $this->extractExtensionScripts($document);
        $extensionScripts = $this->addMissingExtensions($document, $extensionScripts);
        $extensionScripts = $this->removeDuplicateExtensions($extensionScripts);
        $extensionScripts = $this->removeUnneededExtensions($document, $extensionScripts);

        $this->renderExtensionScripts($document, $extensionScripts);
    }

    /**
     * Extract the extension scripts already present in the document.
     *
     * @param Document $document Document to extract the extension scripts from.
     * @return Element[] Array of extension scripts.
     */
    private function extractExtensionScripts(Document $document)
    {
        $extensionScripts = [];

        // We memorize nodes to be removed first and only remove them after the loop to not mess up the loop index.
        $nodesToRemove = [];

        foreach ($document->head->getElementsByTagName(Tag::SCRIPT) as $script) {
            if ($script->getAttribute(Attribute::ID) === Extension::ACCESS) {
                // Explicitly detect amp-access via the script tag in the header to be able to handle amp-access
                // extensions.
                $extensionScripts = $this->maybeAddExtension($document, $extensionScripts, Extension::ACCESS);
                $extensionScripts = $this->maybeAddExtension($document, $extensionScripts, Extension::ANALYTICS);

                $jsonData = $this->getJsonData($script);
                if (array_key_exists('vendor', $jsonData) && $jsonData['vendor'] === 'laterpay') {
                    $extensionScripts = $this->maybeAddExtension(
                        $document,
                        $extensionScripts,
                        Extension::ACCESS_LATERPAY
                    );
                }
            } elseif ($script->getAttribute(Attribute::ID) === Extension::SUBSCRIPTIONS) {
                // Explicitly detect amp-subscriptions via the script tag in the header to be able to handle
                // amp-subscriptions extensions.
                $extensionScripts = $this->maybeAddExtension($document, $extensionScripts, Extension::SUBSCRIPTIONS);
                $extensionScripts = $this->maybeAddExtension($document, $extensionScripts, Extension::ANALYTICS);

                $jsonData = $this->getJsonData($script);
                if (!array_key_exists('services', $jsonData)) {
                    continue;
                }

                foreach ($jsonData['services'] as $service) {
                    if (
                        array_key_exists('serviceId', $service)
                        && $service['serviceId'] === 'subscribe.google.com'
                    ) {
                        $extensionScripts = $this->maybeAddExtension(
                            $document,
                            $extensionScripts,
                            Extension::SUBSCRIPTIONS_GOOGLE
                        );
                        break;
                    }
                }
            }

            $src = $script->getAttribute(Attribute::SRC);

            if (
                ! $script->hasAttribute(Attribute::SRC)
                ||
                Amp::CACHE_ROOT_URL !== substr($src, 0, strlen(Amp::CACHE_ROOT_URL))
            ) {
                continue;
            }

            if (Amp::isRuntimeScript($script)) {
                $extensionScripts[Amp::RUNTIME] = $script;
            } elseif ($script->hasAttribute(Attribute::CUSTOM_ELEMENT)) {
                $extensionScripts[$script->getAttribute(Attribute::CUSTOM_ELEMENT)] = $script;
            } elseif ($script->hasAttribute(Attribute::CUSTOM_TEMPLATE)) {
                $extensionScripts[$script->getAttribute(Attribute::CUSTOM_TEMPLATE)] = $script;
            } else {
                continue;
            }

            $nodesToRemove[] = $script;
        }

        foreach ($nodesToRemove as $nodeToRemove) {
            // Remove the identified extension scripts from the DOM Document so that we can move them.
            $nodeToRemove->parentNode->removeChild($nodeToRemove);
        }

        return $extensionScripts;
    }

    /**
     * Add missing extensions to the array of extension scripts.
     *
     * @param Document  $document         Document to scan for missing extensions.
     * @param Element[] $extensionScripts Array of preexisting extension scripts.
     * @return Element[] Adapted array of extension scripts that includes the previously missing ones.
     */
    private function addMissingExtensions(Document $document, $extensionScripts)
    {
        $node = $document->body;

        while ($node !== null) {
            if (! $node instanceof Element) {
                $node = NodeWalker::nextNode($node);
                continue;
            }

            $tagSpecs = $this->spec->tags()->byTagName($node->tagName);

            foreach ($tagSpecs as $tagSpec) {
                foreach ($tagSpec->requiresExtension as $requiredExtension) {
                    $extensionScripts = $this->maybeAddExtension($document, $extensionScripts, $requiredExtension);
                }
            }

            $node = NodeWalker::nextNode($node);
        }

        return $extensionScripts;
    }

    /**
     * Remove duplicate extension scripts.
     *
     * @param Element[] $extensionScripts Array of extension scripts to deduplicate.
     * @return Element[] Deduplicated array of extension scripts.
     */
    private function removeDuplicateExtensions($extensionScripts)
    {
        // TODO: Add logic.

        return $extensionScripts;
    }

    /**
     * Remove unneeded extension scripts.
     *
     * @param Document  $document         Document to scan for unneeded extensions.
     * @param Element[] $extensionScripts Array of extension scripts to check.
     * @return Element[] Adapted array of extension scripts.
     */
    private function removeUnneededExtensions(Document $document, $extensionScripts)
    {
        // TODO: Add logic.

        return $extensionScripts;
    }

    /**
     * Render the extension scripts into the DOM document.
     *
     * @param Document $document         Document to render the extension scripts into.
     * @param array    $extensionScripts Array of extension scripts to render.
     */
    private function renderExtensionScripts(Document $document, array $extensionScripts)
    {
        $referenceNode = $document->viewport;

        if (!$referenceNode) {
            $referenceNode = $document->charset;
        }

        if (
            $referenceNode
            && $referenceNode->nextSibling instanceof Element
            && $referenceNode->nextSibling->hasAttribute(Attribute::AMP_BOILERPLATE)
        ) {
            $referenceNode = $referenceNode->nextSibling;
        }

        foreach ($extensionScripts as $extensionScript) {
            if ($referenceNode && $referenceNode->nextSibling) {
                $referenceNode->parentNode->insertBefore(
                    $extensionScript,
                    $referenceNode->nextSibling
                );
            } else {
                $document->head->appendChild($extensionScript);
            }

            //$referenceNode = $extensionScript;
        }
    }

    /**
     * Maybe add a required extension to the list of extension scripts.
     *
     * @param Document $document          Document to render the extension scripts into.
     * @param array    $extensionScripts  Existing list of extension scripts.
     * @param string   $requiredExtension Required extension to check for.
     * @return array Adapted list of extension scripts.
     */
    private function maybeAddExtension(Document $document, $extensionScripts, $requiredExtension)
    {
        if (!array_key_exists($requiredExtension, $extensionScripts)) {
            $tagSpec = $this->spec->tags()->byExtensionSpec($requiredExtension);

            $requiredScript = $document->createElement(Tag::SCRIPT);
            $requiredScript->appendChild($document->createAttribute(Attribute::ASYNC));
            $requiredScript->setAttribute($tagSpec->getExtensionType(), $requiredExtension);
            $requiredScript->setAttribute(Attribute::SRC, $this->getScriptSrcForExtension($tagSpec));
            $extensionScripts[$requiredExtension] = $requiredScript;
        }

        return $extensionScripts;
    }

    /**
     * Get the URL to use for the extension script's src attribute.
     *
     * @param Spec\TagWithExtensionSpec $tagSpec Spec of the extension tag.
     * @return string URL to use for extension script.
     */
    private function getScriptSrcForExtension($tagSpec)
    {
        return Amp::CACHE_ROOT_URL . "v0/{$tagSpec->getExtensionName()}-{$tagSpec->getLatestVersion()}.js";
    }

    /**
     * Get the JSON data from the script element.
     *
     * @param Element $script Script element to get the JSON data from.
     * @return array Associative array of parsed JSON data.
     */
    private function getJsonData(Element $script)
    {
        try {
            $jsonData = json_decode(trim($script->nodeValue), true);
            if (is_array($jsonData)) {
                return $jsonData;
            }
        } catch (Exception $exception) {
            // TODO: Log error.
        }

        return [];
    }
}
