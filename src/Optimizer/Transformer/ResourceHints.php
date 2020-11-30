<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Amp;
use AmpProject\Dom\Document;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;
use AmpProject\RequestDestination;

/**
 * Transformer adding meaningful resource hints to the document.
 *
 * This transformer adds the following resource hints:
 * 1. Google Fonts preconnect hint.
 *
 * @package ampproject/amp-toolbox
 */
final class ResourceHints implements Transformer
{

    /**
     * Domain that the Google Fonts static files are loaded from.
     *
     * @var string
     */
    const GOOGLE_FONTS_STATIC_DOMAIN = 'https://fonts.gstatic.com/';

    /**
     * Domain that the Google Fonts API is accepting requests from.
     *
     * @var string
     */
    const GOOGLE_FONTS_API_DOMAIN = 'https://fonts.googleapis.com/';

    /**
     * XPath query to fetch links pointing to the Google Fonts API.
     *
     * @var string
     */
    const XPATH_GOOGLE_FONTS_API_QUERY = './/link[starts-with(@href, "' . self::GOOGLE_FONTS_API_DOMAIN . '")]';

    /**
     * Apply transformations to the provided DOM document.
     *
     * @param Document        $document DOM document to apply the transformations to.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     * @return void
     */
    public function transform(Document $document, ErrorCollection $errors)
    {
        if($this->isAmpRuntimeScriptNeeded()) {
            $document->resourceHints->addPreload($this->getAmpRuntimeScriptHost(), RequestDestination::SCRIPT);
        }

        if($this->isAmpRuntimeCssNeeded()) {
            $document->resourceHints->addPreload($this->getAmpRuntimeCssHost(), RequestDestination::STYLE);
        }

        if ($this->usesGoogleFonts($document)) {
            $document->resourceHints->addPreconnect(self::GOOGLE_FONTS_STATIC_DOMAIN);
        }
    }

    /**
     * Check whether the document uses Google Fonts.
     *
     * @param Document $document Document to check for Google Fonts.
     * @return boolean Whether the provided document uses Google Fonts.
     */
    private function usesGoogleFonts(Document $document)
    {
        $links = $document->xpath->query(
            self::XPATH_GOOGLE_FONTS_API_QUERY,
            $document->head
        );

        return $links->length > 0;
    }

    /**
     * Check whether the AMP runtime script is needed.
     *
     * @return bool Whether the AMP runtime script is needed.
     */
    private function isAmpRuntimeScriptNeeded()
    {
        return true;
    }

    /**
     * Get the host domain of the AMP runtime script to preload.
     *
     * @return string AMP runtime script host.
     */
    private function getAmpRuntimeScriptHost()
    {
        return Amp::CACHE_HOST;
    }

    /**
     * Check whether the AMP runtime CSS is needed.
     *
     * @return bool Whether the AMP runtime CSS is needed.
     */
    private function isAmpRuntimeCssNeeded()
    {
        return true;
    }

    /**
     * Get the host domain of the AMP runtime CSS to preload.
     *
     * @return string AMP runtime CSS host.
     */
    private function getAmpRuntimeCssHost()
    {
        return Amp::CACHE_HOST;
    }
}
