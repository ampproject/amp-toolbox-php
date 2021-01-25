<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpBrightcove extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::BRIGHTCOVE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'autoplay',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'data-account',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'dock',
                SpecRule::REQUIRES_EXTENSION => [
                    'amp-video-docking',
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
            'amp-brightcove',
        ],
    ];
}
