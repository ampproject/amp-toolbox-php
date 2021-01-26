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

final class AmpBodymovinAnimation extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::BODYMOVIN_ANIMATION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::LOOP,
                SpecRule::VALUE_REGEX_CASEI => '[1-9][0-9]*|false|true',
            ],
            [
                SpecRule::NAME => Attribute::NOAUTOPLAY,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => Attribute::RENDERER,
                SpecRule::VALUE_CASEI => [
                    'svg',
                    'html',
                ],
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bodymovin-animation/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::BODYMOVIN_ANIMATION,
        ],
    ];
}
