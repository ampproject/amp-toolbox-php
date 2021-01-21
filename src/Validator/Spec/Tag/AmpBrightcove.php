<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpBrightcove
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::BRIGHTCOVE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_ACCOUNT,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::DOCK,\n        SpecRule::REQUIRES_EXTENSION => [\n                        'amp-video-docking',\n                    ],\n    ],\n    [\n        SpecRule::NAME => '[DATA_ACCOUNT]',\n    ],\n    [\n        SpecRule::NAME => '[DATA_EMBED]',\n    ],\n    [\n        SpecRule::NAME => '[DATA_PLAYER_ID]',\n    ],\n    [\n        SpecRule::NAME => '[DATA_PLAYER]',\n    ],\n    [\n        SpecRule::NAME => '[DATA_PLAYLIST_ID]',\n    ],\n    [\n        SpecRule::NAME => '[DATA_VIDEO_ID]',\n    ],\n    [\n        SpecRule::NAME => '[DATA_REFERRER]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-brightcove/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-brightcove',\n            ],\n];";
}
