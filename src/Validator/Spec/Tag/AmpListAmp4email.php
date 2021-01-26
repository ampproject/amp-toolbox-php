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

final class AmpListAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::LIST_,
        SpecRule::SPEC_NAME => 'AMP-LIST (AMP4EMAIL)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'binding',
                SpecRule::VALUE => [
                    'always',
                    'no',
                    'refresh',
                    'refresh-evaluate',
                ],
            ],
            [
                SpecRule::NAME => 'diffable',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'items',
            ],
            [
                SpecRule::NAME => 'max-items',
            ],
            [
                SpecRule::NAME => 'single-item',
            ],
            [
                SpecRule::NAME => 'src',
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
                SpecRule::NAME => 'template',
                SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
            ],
            [
                SpecRule::NAME => 'xssi-prefix',
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
