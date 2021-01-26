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

final class AmpNexxtvPlayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::NEXXTV_PLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_CLIENT,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::DATA_MEDIAID,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[^=/?:]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_MODE,
                SpecRule::VALUE => [
                    'api',
                    'static',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_ORIGIN,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                        Protocol::HTTP,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_STREAMTYPE,
                SpecRule::VALUE => [
                    'album',
                    'audio',
                    'live',
                    'playlist',
                    'playlist-marked',
                    'video',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
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
            Extension::NEXXTV_PLAYER,
        ],
    ];
}
