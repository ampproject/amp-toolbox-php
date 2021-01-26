<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpYoutube extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::YOUTUBE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'autoplay',
            ],
            [
                SpecRule::NAME => 'loop',
            ],
            [
                SpecRule::NAME => 'credentials',
                SpecRule::VALUE_CASEI => [
                    'include',
                    'omit',
                ],
            ],
            [
                SpecRule::NAME => 'data-live-channelid',
                SpecRule::MANDATORY_ONEOF => '[\'data-live-channelid\', \'data-videoid\']',
                SpecRule::VALUE_REGEX => '[^=/?:]+',
            ],
            [
                SpecRule::NAME => 'data-videoid',
                SpecRule::MANDATORY_ONEOF => '[\'data-live-channelid\', \'data-videoid\']',
                SpecRule::VALUE_REGEX => '[^=/?:]+',
            ],
            [
                SpecRule::NAME => 'dock',
                SpecRule::REQUIRES_EXTENSION => [
                    'amp-video-docking',
                ],
            ],
            [
                SpecRule::NAME => '[data-videoid]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'lightboxable-elements',
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
            'amp-youtube',
        ],
    ];
}
