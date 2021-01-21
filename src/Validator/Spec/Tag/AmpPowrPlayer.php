<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpPowrPlayer
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::POWR_PLAYER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_ACCOUNT,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_PLAYER,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',\n    ],\n    [\n        SpecRule::NAME => '[DATA_REFERRER]',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_TERMS,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-video\\', \\'data-terms\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_VIDEO,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-video\\', \\'data-terms\\']',\n        SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-powr-player/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-powr-player',\n            ],\n];";
}
