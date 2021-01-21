<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpSoundcloud
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::SOUNDCLOUD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_COLOR,\n        SpecRule::VALUE_REGEX_CASEI => '([0-9a-f]{3}){1,2}',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_PLAYLISTID,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-trackid\\', \\'data-playlistid\\']',\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SECRET_TOKEN,\n        SpecRule::VALUE_REGEX => '[A-Za-z0-9_-]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_TRACKID,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-trackid\\', \\'data-playlistid\\']',\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_VISUAL,\n        SpecRule::VALUE_CASEI => [\n                        'false',\n                        'true',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-soundcloud',\n            ],\n];";
}
