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
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpBrightcove extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::BRIGHTCOVE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOPLAY,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_ACCOUNT,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::DOCK,
                SpecRule::REQUIRES_EXTENSION => [
                    Extension::VIDEO_DOCKING,
                ],
            ],
            [
                SpecRule::NAME => '[data-account]',
            ],
            [
                SpecRule::NAME => '[data-embed]',
            ],
            [
                SpecRule::NAME => '[data-player-id]',
            ],
            [
                SpecRule::NAME => '[data-player]',
            ],
            [
                SpecRule::NAME => '[data-playlist-id]',
            ],
            [
                SpecRule::NAME => '[data-video-id]',
            ],
            [
                SpecRule::NAME => '[data-referrer]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-brightcove/',
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
            Extension::BRIGHTCOVE,
        ],
    ];
}
