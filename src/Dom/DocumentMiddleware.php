<?php

namespace AmpProject\Dom;

use AmpProject\Dom\Document;

interface DocumentMiddleware
{

    /**
     * Preprocess the HTML to be loaded into the Dom\Document.
     *
     * @param string $html String of HTML markup to be preprocessed.
     * @return string Preprocessed string of HTML markup.
     */
    public function beforeLoad($html);

    /**
     * Process the Document after the html loaded into the Dom\Document.
     *
     * @param Document $document Document to be processed.
     */
    public function afterLoad(Document $document);

    /**
     * Preprocess the DOM to be saved into HTML.
     *
     * @param Document $document Document to be preprocessed before saving it into HTML.
     */
    public function beforeSave(Document $document);

    /**
     * Process the Dom\Document after being saved from Dom\Document.
     *
     * @param string $html String of HTML markup to be preprocessed.
     * @return string Preprocessed string of HTML markup.
     */
    public function afterSave($html);
}
