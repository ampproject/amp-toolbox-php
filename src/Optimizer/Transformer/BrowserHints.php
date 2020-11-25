<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;

final class BrowserHints implements Transformer
{

    /**
     * Domain that the Google Fonts are loaded from.
     *
     * @var string
     */
    const GOOGLE_FONTS_DOMAIN = 'https://fonts.gstatic.com/';

    /**
     * Apply transformations to the provided DOM document.
     *
     * @param Document        $document DOM document to apply the
     *                                  transformations to.
     * @param ErrorCollection $errors   Collection of errors that are collected
     *                                  during transformation.
     * @return void
     */
    public function transform(Document $document, ErrorCollection $errors)
    {
        if ($this->usesGoogleFonts($document)) {
            $document->links->addPreconnect(self::GOOGLE_FONTS_DOMAIN);
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
        return false;
    }
}
