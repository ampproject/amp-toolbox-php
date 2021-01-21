<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpNexxtvPlayer
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::NEXXTV_PLAYER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_CLIENT,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_MEDIAID,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '[^=/?:]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_MODE,\n        SpecRule::VALUE => [\n                        'api',\n                        'static',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_ORIGIN,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                            'http',\n                        ],\n                        SpecRule::ALLOW_EMPTY => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_STREAMTYPE,\n        SpecRule::VALUE => [\n                        'album',\n                        'audio',\n                        'live',\n                        'playlist',\n                        'playlist-marked',\n                        'video',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-nexxtv-player',\n            ],\n];";
}
