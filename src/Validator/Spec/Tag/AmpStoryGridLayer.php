<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryGridLayer
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_GRID_LAYER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TEMPLATE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'fill',\n                        'horizontal',\n                        'thirds',\n                        'vertical',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::POSITION,\n        SpecRule::VALUE => [\n                        'landscape-half-left',\n                        'landscape-half-right',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ASPECT_RATIO,\n        SpecRule::VALUE_REGEX => '\\d+:\\d+',\n    ],\n],\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-STORY-GRID-LAYER default',\n                ],\n                [\n                    'tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::DESCENDANT_TAG_LIST => 'amp-story-grid-layer-allowed-descendants',\n];";
}
