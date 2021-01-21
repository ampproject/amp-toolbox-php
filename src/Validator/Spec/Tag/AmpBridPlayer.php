<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpBridPlayer
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::BRID_PLAYER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_DYNAMIC,\n        SpecRule::VALUE_REGEX => '[a-z]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_OUTSTREAM,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-outstream\\', \\'data-playlist\\', \\'data-video\\']',\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_PARTNER,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_PLAYER,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_PLAYLIST,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-outstream\\', \\'data-playlist\\', \\'data-video\\']',\n        SpecRule::VALUE_REGEX => '.+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_VIDEO,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-outstream\\', \\'data-playlist\\', \\'data-video\\']',\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DOCK,\n        SpecRule::REQUIRES_EXTENSION => [\n                        'amp-video-docking',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-brid-player/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-brid-player',\n            ],\n];";
}
