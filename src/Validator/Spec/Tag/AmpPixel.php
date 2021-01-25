<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpPixel extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::PIXEL,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'allow-ssr-img',
            ],
            [
                SpecRule::NAME => 'referrerpolicy',
                SpecRule::VALUE => [
                    'no-referrer',
                ],
            ],
            [
                SpecRule::NAME => 'src',
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'https',
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
            'supportedLayouts' => [
                Layout::FIXED,
                Layout::NODISPLAY,
            ],
            'definesDefaultWidth' => true,
            'definesDefaultHeight' => true,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
