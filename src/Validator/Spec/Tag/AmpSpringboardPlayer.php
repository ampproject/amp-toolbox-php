<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpSpringboardPlayer
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::SPRINGBOARD_PLAYER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_CONTENT_ID,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_DOMAIN,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_ITEMS,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_MODE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_CASEI => [\n                        'playlist',\n                        'video',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_PLAYER_ID,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX_CASEI => '[a-z0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SITE_ID,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FLEX_ITEM,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-springboard-player',\n            ],\n];";
}
