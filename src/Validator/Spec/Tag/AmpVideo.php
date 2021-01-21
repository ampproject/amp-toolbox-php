<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpVideo
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::VIDEO,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::POSTER,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n                'amp-video-common',\n                'lightboxable-elements',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-STORY',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::ALSO_REQUIRES_TAG_WARNING => [\n                'amp-video extension script',\n            ],\n];";
}
