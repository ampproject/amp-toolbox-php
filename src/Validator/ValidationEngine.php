<?php

namespace AmpProject\Validator;

use AmpProject\Dom\Document;
use AmpProject\Html\Parser\HtmlParser;
use AmpProject\Tests\LoggingHtmlSaxHandlerWithLocation;

/**
 * Validator engine that checks adherence to spec rules against provided markup.
 *
 * @package ampproject/amp-toolbox
 */
final class ValidationEngine
{

    /**
     * Validate the provided DOM document.
     *
     * @param Document $document DOM document to apply the transformations to.
     * @return ValidationResult Result of the validation.
     */
    public function validateDom(Document $document)
    {
        return $this->validateHtml($document->saveHTML());
    }

    /**
     * Validate the provided string of HTML markup.
     *
     * @param string $html HTML markup to apply the transformations to.
     * @return ValidationResult Result of the validation.
     */
    public function validateHtml($html)
    {
        $status = ValidationStatus::UNKNOWN();
        $errors = new ValidationErrorCollection();

        $parser  = new HtmlParser();
        $handler = new LoggingHtmlSaxHandlerWithLocation();

        $parser->parse($handler, $html);

        return new ValidationResult($status, $errors);
    }
}
