<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpDailymotion
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::DAILYMOTION,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_ENDSCREEN_ENABLE,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_INFO,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_MUTE,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SHARING_ENABLE,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_START,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_UI_HIGHLIGHT,\n        SpecRule::VALUE_REGEX_CASEI => '([0-9a-f]{3}){1,2}',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_UI_LOGO,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_VIDEOID,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX_CASEI => '[a-z0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DOCK,\n        SpecRule::REQUIRES_EXTENSION => [\n                        'amp-video-docking',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-dailymotion/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-dailymotion',\n            ],\n];";
}
