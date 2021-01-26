<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Internal;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class IAmphtmlSizerResponsive extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Internal::SIZER,
        SpecRule::SPEC_NAME => 'I-AMPHTML-SIZER-RESPONSIVE',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'style',
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '!\s*important',
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                SpecRule::CSS_DECLARATION => [
                    [
                        SpecRule::NAME => 'display',
                        SpecRule::VALUE_CASEI => [
                            'block',
                        ],
                    ],
                    [
                        SpecRule::NAME => 'padding-top',
                    ],
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::EXPLICIT_ATTRS_ONLY => true,
        SpecRule::ENABLED_BY => [
            Attribute::TRANSFORMED,
        ],
    ];
}
