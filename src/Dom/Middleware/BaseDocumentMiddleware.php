<?php

namespace AmpProject\Dom\Middleware;

use AmpProject\Dom\Document;
use AmpProject\Dom\DocumentMiddleware;
use AmpProject\Dom\Options;
use AmpProject\Dom\UniqueIdManager;

/**
 * Middleware for the Dom\Document object.
 *
 * @property Options         $options          Associative array of configure options for DOM document.
 * @property UniqueIdManager $uniqueId         Unique ID manager for the Document instance.
 * @property string          $originalEncoding The original encoding of how the AmpProject\Dom\Document was created.
 *
 * @package ampproject/amp-toolbox
 */
abstract class BaseDocumentMiddleware implements DocumentMiddleware
{

    /**
     * Associative array of configure options for DOM document.
     *
     * @var Options
     */
    protected $options;

    /**
     * Unique ID manager for the Document instance.
     *
     * @var UniqueIdManager
     */
    protected $uniqueId;

    /**
     * The original encoding of how the AmpProject\Dom\Document was created.
     *
     * @var string
     */
    protected $originalEncoding;

    /**
     * Creates a new AmpProject\Dom\DocumentMiddleware object
     *
     * @param Options         $options          Associative array of configure options for DOM document.
     * @param UniqueIdManager $uniqueId         Unique ID manager for the Document instance.
     * @param string          $originalEncoding The original encoding of how the AmpProject\Dom\Document was created.
     */
    public function __construct(Options $options, UniqueIdManager $uniqueId, $originalEncoding)
    {
        $this->options = $options;
        $this->uniqueId = $uniqueId;
        $this->originalEncoding = $originalEncoding;
    }

    /**
     * Preprocess the HTML to be loaded into the Dom\Document.
     *
     * @param string $html String of HTML markup to be preprocessed.
     * @return string Preprocessed string of HTML markup.
     */
    public function beforeLoad($html)
    {
        return $html;
    }

    /**
     * Process the Document after the html loaded into the Dom\Document.
     *
     * @param Document $document Document to be processed.
     */
    public function afterLoad(Document $document)
    {
        return $document;
    }

    /**
     * Preprocess the DOM to be saved into HTML.
     *
     * @param Document $document Document to be preprocessed before saving it into HTML.
     */
    public function beforeSave(Document $document)
    {
        return $document;
    }

    /**
     * Process the Dom\Document after being saved from Dom\Document.
     *
     * @param string $html String of HTML markup to be preprocessed.
     * @return string Preprocessed string of HTML markup.
     */
    public function afterSave($html)
    {
        return $html;
    }
}
