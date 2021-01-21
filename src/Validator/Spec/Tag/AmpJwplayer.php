<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpJwplayer
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::JWPLAYER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_MEDIA_ID,\n        SpecRule::VALUE_REGEX_CASEI => '[0-9a-z]{8}|outstream',\n        SpecRule::MANDATORY_ONEOF => '[\\'data-media-id\\', \\'data-playlist-id\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_PLAYER_ID,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX_CASEI => '[0-9a-z]{8}',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_PLAYLIST_ID,\n        SpecRule::VALUE_REGEX_CASEI => '[0-9a-z]{8}',\n        SpecRule::MANDATORY_ONEOF => '[\\'data-media-id\\', \\'data-playlist-id\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::DOCK,\n        SpecRule::REQUIRES_EXTENSION => [\n                        'amp-video-docking',\n                    ],\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-jwplayer/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-jwplayer',\n            ],\n];";
}
