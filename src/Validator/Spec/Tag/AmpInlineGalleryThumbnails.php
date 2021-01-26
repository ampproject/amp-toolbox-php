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

final class AmpInlineGalleryThumbnails extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::INLINE_GALLERY_THUMBNAILS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'aspect-ratio-height',
                SpecRule::DISALLOWED_VALUE_REGEX => '^0+(\.0+)?$',
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::ASPECT_RATIO_WIDTH,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'aspect-ratio-width',
                SpecRule::DISALLOWED_VALUE_REGEX => '^0+(\.0+)?$',
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::ASPECT_RATIO_HEIGHT,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'loop',
                SpecRule::VALUE => [
                    'true',
                    'false',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inline-gallery/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::INLINE_GALLERY,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::INLINE_GALLERY,
        ],
    ];
}
