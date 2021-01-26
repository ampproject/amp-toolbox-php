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

final class AmpPixel extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::PIXEL,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALLOW_SSR_IMG,
            ],
            [
                SpecRule::NAME => Attribute::REFERRERPOLICY,
                SpecRule::VALUE => [
                    'no-referrer',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => true,
                    SpecRule::ALLOW_EMPTY => true,
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-pixel/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FIXED,
                Layout::NODISPLAY,
            ],
            SpecRule::DEFINES_DEFAULT_WIDTH => true,
            SpecRule::DEFINES_DEFAULT_HEIGHT => true,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
