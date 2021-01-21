<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpTruncateText
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::TRUNCATE_TEXT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::OVERFLOW_STYLE,\n        SpecRule::VALUE => [\n                        'right',\n                        'default',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-truncate-text/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::CONTAINER,\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-truncate-text',\n            ],\n];";
}
