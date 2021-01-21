<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpFitText
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::FIT_TEXT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::MAX_FONT_SIZE,\n    ],\n    [\n        SpecRule::NAME => Attribute::MIN_FONT_SIZE,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-fit-text',\n            ],\n];";
}
