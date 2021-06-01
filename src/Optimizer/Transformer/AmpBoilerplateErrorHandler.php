<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;
use AmpProject\Tag;

/**
 * AmpBoilerplateErrorHandler - adds amp-onerror handler to disable boilerplate early on runtime error.
 *
 * This ensures that the boilerplate does not hide the content for several seconds if an error occurred
 * while loading the AMP runtime that could already be detected much earlier.
 *
 * @package ampproject/amp-toolbox
 */
final class AmpBoilerplateErrorHandler implements Transformer
{
    /**
     * Error handler script to be added to the document's <head> for non-transformed AMP pages.
     *
     * @var string
     */
    const ERROR_HANDLER_NOT_TRANSFORMED = 'document.querySelector("script[src*=\'/v0.js\']").onerror=function(){'
                                          . 'document.querySelector(\'style[amp-boilerplate]\').textContent=\'\'}';

    /**
     * Error handler script to be added to the document's <head> for transformed AMP pages.
     *
     * @var string
     */
    const ERROR_HANDLER_TRANSFORMED = '[].slice.call(document.querySelectorAll('
                                      . '"script[src*=\'/v0.js\'],script[src*=\'/v0.mjs\']")).forEach('
                                      . 'function(s){s.onerror='
                                      . 'function(){'
                                      . 'document.querySelector(\'style[amp-boilerplate]\').textContent=\'\''
                                      . '}})';

    /**
     * Apply transformations to the provided DOM document.
     *
     * @param Document        $document DOM document to apply the transformations to.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     * @return void
     */
    public function transform(Document $document, ErrorCollection $errors)
    {
        if ($document->html->hasAttribute(Attribute::I_AMPHTML_NO_BOILERPLATE)) {
            // Boilerplate was removed, so no need for the amp-onerror handler.
            return;
        }

        $document->head->appendChild(
            $document->createElementWithAttributes(
                Tag::SCRIPT,
                [
                    Attribute::AMP_ONERROR => null,
                ],
                $document->html->hasAttribute(Transformer\TransformedIdentifier::TRANSFORMED_ATTRIBUTE) ?
                    self::ERROR_HANDLER_TRANSFORMED :
                    self::ERROR_HANDLER_NOT_TRANSFORMED
            )
        );
    }
}
