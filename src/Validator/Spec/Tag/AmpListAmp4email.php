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

final class AmpListAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::LIST_,
        SpecRule::SPEC_NAME => 'AMP-LIST (AMP4EMAIL)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::BINDING,
                SpecRule::VALUE => [
                    'always',
                    'no',
                    'refresh',
                    'refresh-evaluate',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DIFFABLE,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::ITEMS,
            ],
            [
                SpecRule::NAME => Attribute::MAX_ITEMS,
            ],
            [
                SpecRule::NAME => Attribute::SINGLE_ITEM,
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => Attribute::TEMPLATE,
                SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
            ],
            [
                SpecRule::NAME => Attribute::XSSI_PREFIX,
            ],
            [
                SpecRule::NAME => '[is-layout-container]',
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
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-LIST',
            'AMP-STATE',
            'TEMPLATE',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::LIST_,
        ],
    ];
}
