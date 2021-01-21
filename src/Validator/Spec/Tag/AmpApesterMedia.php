<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpApesterMedia
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::APESTER_MEDIA,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_APESTER_CHANNEL_TOKEN,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-apester-media-id\\', \\'data-apester-channel-token\\']',\n        SpecRule::VALUE_REGEX => '[0-9a-zA-Z]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_APESTER_MEDIA_ID,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-apester-media-id\\', \\'data-apester-channel-token\\']',\n        SpecRule::VALUE_REGEX => '[0-9a-zA-Z]+',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-apester-media/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-apester-media',\n            ],\n];";
}
