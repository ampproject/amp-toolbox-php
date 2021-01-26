<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Iframe extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::IFRAME,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::FRAMEBORDER,
                SpecRule::VALUE => [
                    '0',
                    '1',
                ],
            ],
            [
                SpecRule::NAME => Attribute::HEIGHT,
            ],
            [
                SpecRule::NAME => Attribute::REFERRERPOLICY,
            ],
            [
                SpecRule::NAME => Attribute::RESIZABLE,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SANDBOX,
            ],
            [
                SpecRule::NAME => Attribute::SCROLLING,
                SpecRule::VALUE => [
                    'auto',
                    'yes',
                    'no',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::DATA,
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => Attribute::SRCDOC,
                SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
            ],
            [
                SpecRule::NAME => Attribute::WIDTH,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'name-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-iframe/',
        SpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,
        SpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::IFRAME,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
