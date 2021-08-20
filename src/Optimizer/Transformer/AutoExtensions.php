<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Amp;
use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use AmpProject\Dom\NodeWalker;
use AmpProject\Extension;
use AmpProject\Optimizer\Configuration\AutoExtensionsConfiguration;
use AmpProject\Optimizer\Error\CannotParseJsonData;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;
use AmpProject\Optimizer\TransformerConfiguration;
use AmpProject\Tag;
use AmpProject\Validator\Spec;
use Exception;
use InvalidArgumentException;

final class AutoExtensions implements Transformer
{

    /**
     * Configuration store to use.
     *
     * @var TransformerConfiguration
     */
    private $configuration;

    /**
     * Validator spec instance.
     *
     * @var Spec
     */
    private $spec;

    const MANUAL_ATTRIBUTE_TO_EXTENSION_MAPPING = [
        Attribute::LIGHTBOX => Extension::LIGHTBOX_GALLERY,
    ];

    /**
     * Instantiate an AutoExtensions object.
     *
     * @param TransformerConfiguration $configuration Configuration store to use.
     * @param Spec                     $spec          Validator spec instance.
     */
    public function __construct(TransformerConfiguration $configuration, Spec $spec)
    {
        $this->configuration = $configuration;
        $this->spec          = $spec;
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
        $extensionScripts = $this->extractExtensionScripts($document, $errors);

        if ($this->configuration->get(AutoExtensionsConfiguration::AUTO_EXTENSION_IMPORT)) {
            $extensionScripts = $this->addMissingExtensions($document, $extensionScripts);
        }

        $extensionScripts = $this->removeUnneededExtensions($document, $extensionScripts);

        $this->renderExtensionScripts($document, $extensionScripts);
    }

    /**
     * Extract the extension scripts already present in the document.
     *
     * @param Document        $document Document to extract the extension scripts from.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     * @return Element[] Array of extension scripts.
     */
    private function extractExtensionScripts(Document $document, ErrorCollection $errors)
    {
        $extensionScripts = [];

        // We memorize nodes to be removed first and only remove them after the loop to not mess up the loop index.
        $nodesToRemove = [];

        foreach ($document->head->getElementsByTagName(Tag::SCRIPT) as $script) {
            /** @var Element $script */
            if ($script->getAttribute(Attribute::ID) === Extension::ACCESS) {
                // Explicitly detect amp-access via the script tag in the header to be able to handle amp-access
                // extensions.
                $extensionScripts = $this->maybeAddExtension($document, $extensionScripts, Extension::ACCESS);
                $extensionScripts = $this->maybeAddExtension($document, $extensionScripts, Extension::ANALYTICS);

                $jsonData = $this->getJsonData($script, $errors);
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

                $jsonData = $this->getJsonData($script, $errors);
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
            if ($node instanceof Element) {
                $extensionScripts = $this->addRequiredExtensionByTag($document, $node, $extensionScripts);
                $extensionScripts = $this->addRequiredExtensionByAttributes($document, $node, $extensionScripts);
            }

            $node = NodeWalker::nextNode($node);
        }

        return $extensionScripts;
    }

    /**
     * Add required extension by tag names.
     *
     * @param Document  $document         Document to scan for missing extensions.
     * @param Element   $node             The node we are inspecting to see if it needs an extension.
     * @param Element[] $extensionScripts Array of preexisting extension scripts.
     * @return Element[] Adapted array of extension scripts that includes the previously missing ones.
     */
    private function addRequiredExtensionByTag(Document $document, Element $node, $extensionScripts)
    {
        if (! Amp::isCustomElement($node)) {
            return $this->addExtensionForCustomTemplates($document, $node, $extensionScripts);
        }

        $tagSpecs = $this->spec->tags()->byTagName($node->tagName);

        foreach ($tagSpecs as $tagSpec) {
            foreach ($tagSpec->requiresExtension as $requiredExtension) {
                if (in_array($requiredExtension, self::MANUAL_ATTRIBUTE_TO_EXTENSION_MAPPING)) {
                    continue;
                }

                $extensionScripts = $this->maybeAddExtension($document, $extensionScripts, $requiredExtension);
            }
        }

        return $extensionScripts;
    }

    /**
     * Add extensions custom templates (e.g. amp-mustache).
     *
     * @param Document  $document         Document to scan for missing extensions.
     * @param Element   $node             The node we are inspecting to see if it needs an extension.
     * @param Element[] $extensionScripts Array of preexisting extension scripts.
     * @return Element[] Adapted array of extension scripts that includes the previously missing ones.
     */
    private function addExtensionForCustomTemplates(Document $document, Element $node, $extensionScripts)
    {
        if ($node->tagName === Tag::TEMPLATE && $node->hasAttribute(Attribute::TYPE)) {
            $extensionScripts = $this->maybeAddExtension(
                $document,
                $extensionScripts,
                $node->getAttribute(Attribute::TYPE)
            );
        }

        return $extensionScripts;
    }

    /**
     * Add required extension by attributes.
     *
     * @param Document  $document         Document to scan for missing extensions.
     * @param Element   $node             The node we are inspecting to see if it needs an extension.
     * @param Element[] $extensionScripts Array of preexisting extension scripts.
     * @return Element[] Adapted array of extension scripts that includes the previously missing ones.
     */
    private function addRequiredExtensionByAttributes(Document $document, Element $node, $extensionScripts)
    {
        if (! $node->hasAttributes()) {
            return $extensionScripts;
        }

        if ($node->tagName === Tag::FORM) {
            $extensionScripts = $this->maybeAddExtension($document, $extensionScripts, Extension::FORM);
        }

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
        $referenceNode = $this->getExtensionScriptsReferenceNode($document);

        foreach ($extensionScripts as $extensionScript) {
            if ($referenceNode && $referenceNode->nextSibling) {
                $referenceNode->parentNode->insertBefore(
                    $extensionScript,
                    $referenceNode->nextSibling
                );
            } else {
                $document->head->appendChild($extensionScript);
            }

            $referenceNode = $extensionScript;
        }
    }

    /**
     * Get the reference node to attach extension scripts to.
     *
     * @param Document $document Document to look for the reference node in.
     * @return Element|null Reference node to use, or null if not found.
     */
    private function getExtensionScriptsReferenceNode(Document $document)
    {
        $referenceNode = $document->viewport ?: $document->charset;

        if (! $referenceNode instanceof Element) {
            $referenceNode = $document->head->firstChild;
        }

        if (! $referenceNode instanceof Element) {
            return null;
        }

        // Try to detect the boilerplate style so we can append the scripts after that.
        $remainingNode = $referenceNode->nextSibling;
        while ($remainingNode) {
            if (! $remainingNode instanceof Element) {
                $remainingNode = $remainingNode->nextSibling;
                continue;
            }

            if (
                $remainingNode->tagName === Tag::STYLE
                && $remainingNode->hasAttribute(Attribute::AMP_BOILERPLATE)
            ) {
                $referenceNode = $remainingNode;
            } elseif (
                $remainingNode->tagName === Tag::NOSCRIPT
                && $remainingNode->firstChild instanceof Element
                && $remainingNode->firstChild->tagName === Tag::STYLE
                && $remainingNode->firstChild->hasAttribute(Attribute::AMP_BOILERPLATE)
            ) {
                $referenceNode = $remainingNode;
            }

            $remainingNode = $remainingNode->nextSibling;
        }

        return $referenceNode;
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
            $tagSpecs = $this->spec->tags()->byExtensionSpec($requiredExtension);

            foreach ($tagSpecs as $tagSpec) {
                $requiredScript = $document->createElement(Tag::SCRIPT);
                $requiredScript->appendChild($document->createAttribute(Attribute::ASYNC));
                $requiredScript->setAttribute($tagSpec->getExtensionType(), $requiredExtension);
                $requiredScript->setAttribute(Attribute::SRC, $this->getScriptSrcForExtension($tagSpec));
                $extensionScripts[$requiredExtension] = $requiredScript;
            }
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
        $version = $this->calculateExtensionVersion($tagSpec);
        return Amp::CACHE_ROOT_URL . "v0/{$tagSpec->getExtensionName()}-{$version}.js";
    }

    /**
     * Get the JSON data from the script element.
     *
     * @param Element         $script Script element to get the JSON data from.
     * @param ErrorCollection $errors Collection of errors that are collected during transformation.
     * @return array Associative array of parsed JSON data.
     */
    private function getJsonData(Element $script, ErrorCollection $errors)
    {
        try {
            $jsonString = trim($script->nodeValue);

            if (empty($jsonString)) {
                return [];
            }

            $jsonData = json_decode(trim($script->nodeValue), true);

            if (JSON_ERROR_NONE !== json_last_error()) {
                throw new InvalidArgumentException('json_decode error: ' . json_last_error_msg());
            }

            if (is_array($jsonData)) {
                return $jsonData;
            }
        } catch (Exception $exception) {
            $errors->add(CannotParseJsonData::fromExceptionForScriptElement($exception, $script));
        }

        return [];
    }

    /**
     * Calculate the extension version.
     *
     * @param Spec\TagWithExtensionSpec $tagSpec Spec of the extension tag.
     * @return string Extension version.
     */
    private function calculateExtensionVersion($tagSpec)
    {
        $configuredVersions = $this->configuration->get(AutoExtensionsConfiguration::EXTENSION_VERSIONS);

        if (! empty($configuredVersions[$tagSpec->getExtensionName()])) {
            return $configuredVersions[$tagSpec->getExtensionName()];
        }

        return $tagSpec->getLatestVersion();
    }
}
