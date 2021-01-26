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

final class AmpNexxtvPlayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::NEXXTV_PLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-client',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'data-mediaid',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[^=/?:]+',
            ],
            [
                SpecRule::NAME => 'data-mode',
                SpecRule::VALUE => [
                    'api',
                    'static',
                ],
            ],
            [
                SpecRule::NAME => 'data-origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                        Protocol::HTTP,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
            ],
            [
                SpecRule::NAME => 'data-streamtype',
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
            'supportedLayouts' => [
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
            'amp-nexxtv-player',
        ],
    ];
}
