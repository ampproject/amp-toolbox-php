<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

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
                SpecRule::NAME => 'data-ampdevmode',
                SpecRule::VALUE => [
                    'false',
                ],
                SpecRule::DISALLOWED_VALUE_REGEX => 'false',
            ],
            [
                SpecRule::NAME => 'max-age',
                SpecRule::VALUE_REGEX => '[0-9]+',
                SpecRule::TRIGGER => [
                    'alsoRequiresAttr' => [
                        'script',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'nodom',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'sandbox',
            ],
            [
                SpecRule::NAME => 'script',
                SpecRule::MANDATORY_ONEOF => '[\'script\', \'src\']',
                SpecRule::VALUE_ONEOF_SET => 'AMP_SCRIPT_IDS',
            ],
            [
                SpecRule::NAME => 'src',
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
