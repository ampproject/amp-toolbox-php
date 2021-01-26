<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class FormDivSubmitSuccess extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::DIV,
        SpecRule::SPEC_NAME => 'FORM DIV [submit-success]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALIGN,
            ],
            [
                SpecRule::NAME => Attribute::SUBMIT_SUCCESS,
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Element::FORM,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
