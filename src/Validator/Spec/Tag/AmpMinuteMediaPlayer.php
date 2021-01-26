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

final class AmpMinuteMediaPlayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::MINUTE_MEDIA_PLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOPLAY,
            ],
            [
                SpecRule::NAME => Attribute::DATA_CONTENT_ID,
            ],
            [
                SpecRule::NAME => Attribute::DATA_CONTENT_TYPE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'curated',
                    'semantic',
                    'specific',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_MINIMUM_DATE_FACTOR,
            ],
            [
                SpecRule::NAME => Attribute::DATA_SCANNED_ELEMENT,
            ],
            [
                SpecRule::NAME => Attribute::DATA_SCANNED_ELEMENT_TYPE,
                SpecRule::VALUE => [
                    'className',
                    'id',
                    'tag',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_SCOPED_KEYWORDS,
            ],
            [
                SpecRule::NAME => Attribute::DATA_TAGS,
            ],
            [
                SpecRule::NAME => Attribute::DOCK,
                SpecRule::REQUIRES_EXTENSION => [
                    Extension::VIDEO_DOCKING,
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-minute-media-player/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
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
            Extension::MINUTE_MEDIA_PLAYER,
        ],
    ];
}
