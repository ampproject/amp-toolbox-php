<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;

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
}
