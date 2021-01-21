<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpYoutube
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::YOUTUBE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n    ],\n    [\n        SpecRule::NAME => Attribute::LOOP,\n    ],\n    [\n        SpecRule::NAME => Attribute::CREDENTIALS,\n        SpecRule::VALUE_CASEI => [\n                        'include',\n                        'omit',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_LIVE_CHANNELID,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-live-channelid\\', \\'data-videoid\\']',\n        SpecRule::VALUE_REGEX => '[^=/?:]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_VIDEOID,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-live-channelid\\', \\'data-videoid\\']',\n        SpecRule::VALUE_REGEX => '[^=/?:]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DOCK,\n        SpecRule::REQUIRES_EXTENSION => [\n                        'amp-video-docking',\n                    ],\n    ],\n    [\n        SpecRule::NAME => '[DATA_VIDEOID]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n                'lightboxable-elements',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-youtube',\n            ],\n];";
}
