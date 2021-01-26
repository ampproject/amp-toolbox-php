<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpScript extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::SCRIPT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_AMPDEVMODE,
                SpecRule::VALUE => [
                    'false',
                ],
                SpecRule::DISALLOWED_VALUE_REGEX => 'false',
            ],
            [
                SpecRule::NAME => Attribute::MAX_AGE,
                SpecRule::VALUE_REGEX => '[0-9]+',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::SCRIPT,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::NODOM,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SANDBOX,
            ],
            [
                SpecRule::NAME => Attribute::SCRIPT,
                SpecRule::MANDATORY_ONEOF => '[\'script\', \'src\']',
                SpecRule::VALUE_ONEOF_SET => 'AMP_SCRIPT_IDS',
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::MANDATORY_ONEOF => '[\'script\', \'src\']',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::CONTAINER,
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-SCRIPT',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::SCRIPT,
        ],
    ];
}
