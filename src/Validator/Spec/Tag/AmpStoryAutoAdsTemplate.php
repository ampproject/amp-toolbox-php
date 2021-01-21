<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryAutoAdsTemplate
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::TEMPLATE,\nSpecRule::SPEC_NAME => 'amp-story-auto-ads > template',\nSpecRule::MANDATORY_PARENT => Extension::STORY_AUTO_ADS,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'amp-mustache',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',\n    ],\n],\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-STORY-GRID-LAYER default',\n                ],\n                [\n                    'tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-mustache',\n            ],\nSpecRule::DESCENDANT_TAG_LIST => 'amp-story-grid-layer-allowed-descendants',\n];";
}
