<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class FormDivSubmitSuccessTemplate extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::DIV,
        SpecRule::SPEC_NAME => 'FORM DIV [submit-success][template]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'align',
            ],
            [
                SpecRule::NAME => 'submit-success',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'template',
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
