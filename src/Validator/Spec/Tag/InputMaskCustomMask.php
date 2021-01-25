<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class InputMaskCustomMask extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::INPUT,
        SpecRule::SPEC_NAME => 'input [mask] (custom mask)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'mask',
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '(payment-card|date-dd-mm-yyyy|date-mm-dd-yyyy|date-mm-yy|date-yyyy-mm-dd)',
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
            [
                SpecRule::NAME => 'mask-trim-zeros',
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => '[type]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'amp-inputmask-common-attr',
            'input-common-attr',
            'name-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-inputmask',
        ],
    ];
}
