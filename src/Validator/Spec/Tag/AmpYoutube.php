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

final class AmpYoutube extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::YOUTUBE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOPLAY,
            ],
            [
                SpecRule::NAME => Attribute::LOOP,
            ],
            [
                SpecRule::NAME => Attribute::CREDENTIALS,
                SpecRule::VALUE_CASEI => [
                    'include',
                    'omit',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_LIVE_CHANNELID,
                SpecRule::MANDATORY_ONEOF => '[\'data-live-channelid\', \'data-videoid\']',
                SpecRule::VALUE_REGEX => '[^=/?:]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_VIDEOID,
                SpecRule::MANDATORY_ONEOF => '[\'data-live-channelid\', \'data-videoid\']',
                SpecRule::VALUE_REGEX => '[^=/?:]+',
            ],
            [
                SpecRule::NAME => Attribute::DOCK,
                SpecRule::REQUIRES_EXTENSION => [
                    Extension::VIDEO_DOCKING,
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
            Extension::YOUTUBE,
        ],
    ];
}
