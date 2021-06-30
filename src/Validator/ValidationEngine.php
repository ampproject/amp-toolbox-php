<?php

namespace AmpProject\Validator;

use AmpProject\Dom\Document;

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
        $status = ValidationStatus::UNKNOWN();
        $errors = new ValidationErrorCollection();
        return new ValidationResult($status, $errors);
    }

    /**
     * Validate the provided string of HTML markup.
     *
     * @param string $html HTML markup to apply the transformations to.
     * @return ValidationResult Result of the validation.
     */
    public function validateHtml($html)
    {
        $document = Document::fromHtml($html);
        return $this->validateDom($document);
    }
}
