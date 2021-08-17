<?php

namespace AmpProject\Validator;

use AmpProject\Format;
use AmpProject\Html\Parser\DocLocator;
use AmpProject\Html\Parser\HtmlSaxHandlerWithLocation;
use AmpProject\Html\Parser\ParsedAttribute;
use AmpProject\Html\Parser\ParsedTag;
use AmpProject\Html\UpperCaseTag as Tag;
use AmpProject\Validator\Spec\Error\DisallowedManufacturedBody;
use AmpProject\Validator\Spec\Error\DuplicateAttribute;
use AmpProject\Validator\Spec\Error\DuplicateUniqueTag;
use AmpProject\Validator\Spec\Error\InvalidDoctypeHtml;

/**
 * Validation Handler which accepts callbacks from HTML Parser.
 *
 * @package ampproject/amp-toolbox
 */
final class ValidationHandler implements HtmlSaxHandlerWithLocation
{

    /**
     * AMP HTML format to validate against.
     *
     * @var string
     */
    private $htmlFormat;

    /**
     * Selection of validation rules to use.
     *
     * @var ValidatorRules
     */
    private $rules;

    /**
     * Validator specification to use.
     *
     * @var Spec
     */
    private $spec;

    /**
     * Validation context.
     *
     * @var Context
     */
    private $context;

    /**
     * Result of the validation.
     *
     * @var ValidationResult
     */
    private $validationResult;

    public function __construct($htmlFormat = Format::AMP, Spec $spec = null)
    {
        $this->htmlFormat       = $htmlFormat;
        $this->spec             = $spec instanceof Spec ? $spec : new Spec();
        $this->validationResult = new ValidationResult();
        $this->rules            = new ValidatorRules($htmlFormat, $spec);
        $this->context          = new Context($this->rules);
    }

    /**
     * Get the validation result.
     *
     * @return ValidationResult Validation result.
     */
    public function getResult()
    {
        return $this->validationResult;
    }

    /**
     * Handler called when the parser found a new tag.
     *
     * @param ParsedTag $tag New tag that was found.
     * @return void
     */
    public function startTag(ParsedTag $tag)
    {
        if ($tag->upperName() === Tag::HTML) {
            $this->context->getRules()->validateHtmlTag($tag, $this->context, $this->validationResult);
        }
        if ($tag->upperName() === Tag::_DOCTYPE) {
            $this->validateDocType($tag);
            // Even though validateDocType emits all necessary errors about the tag, we continue to process it further
            // (validateTag and such) so that we can record the tag was present and record it as the root pseudo element
            // for the document.
        }
        $maybeDuplicateAttributeName = $tag->hasDuplicateAttributes();
        if ($maybeDuplicateAttributeName !== null) {
            $this->context->addWarning(
                DuplicateAttribute::CODE,
                $this->context->getFilePosition(),
                [$tag->lowerName(), $maybeDuplicateAttributeName],
                '',
                $this->validationResult
            );
            $tag->dedupeAttributes();
        }

        if ($tag->upperName() === Tag::BODY) {
            $this->context->recordBodyTag($tag->attributes());
            $this->emitMissingExtensionErrors();
        }
        /*
        /** @type {ValidateTagResult} * /
        let resultForReferencePoint = {
        bestMatchTagSpec: null,
        validationResult: new generated.ValidationResult(),
        devModeSuppress: false,
        inlineStyleCssBytes: 0,
        };
        resultForReferencePoint.validationResult->status =
        generated.ValidationResult.Status.UNKNOWN;
        const referencePointMatcher =
        $this->context->getTagStack()->parentReferencePointMatcher();
        // We must match the reference point before the TagSpec, as otherwise we
        // will end up with "unexplained" attributes during tagspec matching
        // which the reference point takes care of.
        if (referencePointMatcher !== null) {
        resultForReferencePoint =
        referencePointMatcher.validateTag($tag, $this->context);
        }

        const resultForTag = validateTag(
        $tag, resultForReferencePoint.bestMatchTagSpec,
        $this->context);
        resultForTag.devModeSuppress =
        ShouldSuppressDevModeErrors($tag, $this->context);
        // Only merge in the reference point errors into the final result if the
        // tag otherwise passes one of the TagSpecs. Otherwise, we end up with
        // unnecessarily verbose errors.
        if (referencePointMatcher !== null &&
        resultForTag.validationResult->status ===
        generated.ValidationResult.Status.PASS &&
        !resultForTag.devModeSuppress) {
        $this->validationResult->mergeFrom(
        resultForReferencePoint.validationResult);
        }


        checkForReferencePointCollision(
        resultForReferencePoint.bestMatchTagSpec, resultForTag.bestMatchTagSpec,
        $this->context, resultForTag.validationResult);
        if (!resultForTag.devModeSuppress)
        $this->validationResult->mergeFrom(resultForTag.validationResult);

        $this->context->updateFromTagResults(
        $tag, resultForReferencePoint, resultForTag);
        */
    }

    /**
     * Handler called when the parser found a closing tag.
     *
     * @param ParsedTag $tag Closing tag that was found.
     * @return void
     */
    public function endTag(ParsedTag $tag)
    {
        // TODO: Implement endTag() method.
    }

    /**
     * Handler called when PCDATA is found.
     *
     * @param string $text The PCDATA that was found.
     * @return void
     */
    public function pcdata($text)
    {
        // TODO: Implement pcdata() method.
    }

    /**
     * Handler called when RCDATA is found.
     *
     * @param string $text The RCDATA that was found.
     * @return void
     */
    public function rcdata($text)
    {
        // TODO: Implement rcdata() method.
    }

    /**
     * Handler called when CDATA is found.
     *
     * @param string $text The CDATA that was found.
     * @return void
     */
    public function cdata($text)
    {
        // TODO: Implement cdata() method.
    }

    /**
     * Handler called when the parser is starting to parse the document.
     *
     * @return void
     */
    public function startDoc()
    {
        $this->validationResult = new ValidationResult();
    }

    /**
     * Handler called when the parsing is done.
     *
     * @return void
     */
    public function endDoc()
    {
        $this->rules->maybeEmitGlobalTagValidationErrors($this->context, $this->validationResult);

        if ($this->validationResult->getStatus()->equals(ValidationStatus::UNKNOWN())) {
            $this->validationResult->setStatus(ValidationStatus::PASS());
        }

        // As some errors can be inserted out of order, sort errors at the end based on their line / column numbers.
        $this->validationResult->getErrors()->sortByPosition();
    }

    /**
     * Callback for informing that the parser is manufacturing a <body> tag not actually found on the page. This will be
     * followed by a startTag() with the actual body tag in question.
     *
     * @return void
     */
    public function markManufacturedBody()
    {
        $this->context->addError(
            DisallowedManufacturedBody::CODE,
            $this->context->getFilePosition(),
            [],
            '',
            $this->validationResult
        );
    }

    /**
     * HTML5 defines how parsers treat documents with multiple body tags: they merge the attributes from the later ones
     * into the first one. Therefore, just before the parser sends the endDoc event, it will also send this event which
     * will provide the attributes from the effective body tag to the client (the handler).
     *
     * @param array<ParsedAttribute> $attributes Array of parsed attributes.
     * @return void
     */
    public function effectiveBodyTag($attributes)
    {
        $encounteredAttributes = $this->context->getEncounteredBodyAttributes();

        // If we never recorded a body tag with attributes, it was manufactured, in which case we've already logged an
        // error for that. Doing more here would be confusing.
        if ($encounteredAttributes === null) {
            return;
        }

        // So now we compare the attributes from the tag that we encountered (HtmlParser sent us a startTag() event for
        // it earlier) with the attributes from the effective body tag that we're just receiving now, which contains all
        // attributes on body tags within the doc. It's correct to think of this synthetic tag simply as a concatenation
        // - there is in general no elimination of duplicate attributes or overriding behavior. Thus, if the second body
        // tag has any attribute this will result in an error.
        $differenceSeen = count($attributes) !== count($encounteredAttributes);
        if (! $differenceSeen) {
            $attributesCount = count($attributes);
            for ($index = 0; $index < $attributesCount; $index++) {
                if ($attributes[$index] !== $encounteredAttributes[$index]) {
                    $differenceSeen = true;
                    break;
                }
            }
        }

        if (! $differenceSeen) {
            return;
        }

        $this->context->addError(
            DuplicateUniqueTag::CODE,
            $this->context->getEncounteredBodyFilePosition(),
            [Tag::BODY],
            '',
            $this->validationResult
        );
    }

    /**
     * Called prior to parsing a document, that is, before startTag().
     *
     * @param DocLocator $locator A locator instance which provides access to the line/column information while SAX
     *                            events are being received by the handler.
     * @return void
     */
    public function setDocLocator(DocLocator $locator)
    {
        $this->context->setDocLocator($locator);
    }

    private function emitMissingExtensionErrors()
    {
        foreach ($this->context->getExtensionsContext()->getMissingExtensionErrors() as $missingExtensionError) {
            $this->context->recordError($missingExtensionError, $this->validationResult);
        }
    }

    /**
     * Validate the <!doctype> tag.
     *
     * Currently, the HTML parser considers Doctype to be another HTML tag, which is not technically accurate. There is
     * special handling for doctype in Javascript which applies to all AMP formats, as this is strict handling for all
     * HTML in general. Specifically "attributes" are not allowed, even things like `data-foo`.
     *
     * @param ParsedTag $tag The <!doctype> tag to validate.
     */
    private function validateDocType(ParsedTag $tag)
    {
        $attributes = $tag->attributes();

        // <!doctype html> - OK
        if (count($attributes) === 1 && $attributes[0]->name() === 'html') {
            return;
        }

        // <!doctype html lang=...> OK
        // This is technically invalid. The 'correct' way to do this is to emit the
        // lang attribute on the `<html>` tag. However, we observe a number of
        // websites incorrectly emitting `lang` as part of doctype, so this specific
        // attribute is allowed to avoid breaking existing pages.
        if (
            count($attributes) === 2
            &&
            (
                ($attributes[0]->name() === 'html' && $attributes[1]->name() === 'lang')
                ||
                ($attributes[0]->name() === 'lang' && $attributes[1]->name() === 'html')
            )
        ) {
            return;
        }

        if (count($attributes) !== 1 || $attributes[0]->name() !== 'html') {
            $this->context->addError(
                InvalidDoctypeHtml::CODE,
                $this->context->getFilePosition(),
                [],
                'https://amp.dev/documentation/guides-and-tutorials/start/create/basic_markup/',
                $this->validationResult
            );
        }
    }
}
