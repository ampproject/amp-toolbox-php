<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryAmpVideo
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::VIDEO,\nSpecRule::SPEC_NAME => 'amp-story >> amp-video',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::CONTROLS,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DEPRECATION => '- no replacement',\n        SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/23798',\n    ],\n    [\n        SpecRule::NAME => '[CONTROLS]',\n        SpecRule::DEPRECATION => '- no replacement',\n        SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/23798',\n    ],\n    [\n        SpecRule::NAME => Attribute::POSTER,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n                'amp-video-common',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-video',\n            ],\n];";
}
