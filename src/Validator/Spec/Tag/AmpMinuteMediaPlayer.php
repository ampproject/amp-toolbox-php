<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpMinuteMediaPlayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::MINUTE_MEDIA_PLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'autoplay',
            ],
            [
                SpecRule::NAME => 'data-content-id',
            ],
            [
                SpecRule::NAME => 'data-content-type',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'curated',
                    'semantic',
                    'specific',
                ],
            ],
            [
                SpecRule::NAME => 'data-minimum-date-factor',
            ],
            [
                SpecRule::NAME => 'data-scanned-element',
            ],
            [
                SpecRule::NAME => 'data-scanned-element-type',
                SpecRule::VALUE => [
                    'className',
                    'id',
                    'tag',
                ],
            ],
            [
                SpecRule::NAME => 'data-scoped-keywords',
            ],
            [
                SpecRule::NAME => 'data-tags',
            ],
            [
                SpecRule::NAME => 'dock',
                SpecRule::REQUIRES_EXTENSION => [
                    'amp-video-docking',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-minute-media-player/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-minute-media-player',
        ],
    ];
}
