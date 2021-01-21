<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpMinuteMediaPlayer
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::MINUTE_MEDIA_PLAYER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_CONTENT_ID,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_CONTENT_TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'curated',\n                        'semantic',\n                        'specific',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_MINIMUM_DATE_FACTOR,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SCANNED_ELEMENT,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SCANNED_ELEMENT_TYPE,\n        SpecRule::VALUE => [\n                        'className',\n                        'id',\n                        'tag',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SCOPED_KEYWORDS,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_TAGS,\n    ],\n    [\n        SpecRule::NAME => Attribute::DOCK,\n        SpecRule::REQUIRES_EXTENSION => [\n                        'amp-video-docking',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-minute-media-player/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-minute-media-player',\n            ],\n];";
}
