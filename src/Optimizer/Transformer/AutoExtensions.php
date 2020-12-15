<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Amp;
use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;
use AmpProject\Tag;

final class AutoExtensions implements Transformer
{

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

        foreach ($document->head->getElementsByTagName(Tag::SCRIPT) as $script) {
            $src = $script->getAttribute(Attribute::SRC);

            if (
                ! $src
                ||
                Amp::CACHE_ROOT_URL !== substr($src, 0, strlen(Amp::CACHE_ROOT_URL))
            ) {
                continue;
            }

            if (Amp::isRuntimeScript($script)) {
                $extensionScripts[ Amp::RUNTIME ] = $script;
            } elseif ($script->hasAttribute(Attribute::CUSTOM_ELEMENT)) {
                $extensionScripts[ $script->getAttribute(Attribute::CUSTOM_ELEMENT) ] = $script;
            } elseif ($script->hasAttribute(Attribute::CUSTOM_TEMPLATE)) {
                $extensionScripts[ $script->getAttribute(Attribute::CUSTOM_TEMPLATE) ] = $script;
            } else {
                continue;
            }

            // Remove the identified extension scripts from the DOM Document so that we can move them.
            $script->parentNode->removeChild($script);
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
        // TODO: Add logic.
        // This requires access to the AMP validator specification.

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
        // TODO: Add logic.
    }
}
