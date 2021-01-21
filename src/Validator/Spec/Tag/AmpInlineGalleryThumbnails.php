<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpInlineGalleryThumbnails
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::INLINE_GALLERY_THUMBNAILS,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ASPECT_RATIO_HEIGHT,\n        SpecRule::DISALLOWED_VALUE_REGEX => '^0+(\\.0+)?\$',\n        SpecRule::VALUE_REGEX => '\\d+(\\.\\d+)?',\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'aspect-ratio-width',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ASPECT_RATIO_WIDTH,\n        SpecRule::DISALLOWED_VALUE_REGEX => '^0+(\\.0+)?\$',\n        SpecRule::VALUE_REGEX => '\\d+(\\.\\d+)?',\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'aspect-ratio-height',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::LOOP,\n        SpecRule::VALUE => [\n                        'true',\n                        'false',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inline-gallery/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::MANDATORY_ANCESTOR => Extension::INLINE_GALLERY,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-inline-gallery',\n            ],\n];";
}
