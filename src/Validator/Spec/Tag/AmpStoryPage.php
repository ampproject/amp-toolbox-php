<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryPage
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_PAGE,\nSpecRule::MANDATORY_PARENT => Extension::STORY,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTO_ADVANCE_AFTER,\n    ],\n    [\n        SpecRule::NAME => Attribute::BACKGROUND_AUDIO,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'http',\n                            'https',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::NEXT_PAGE_NO_AD,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'mandatory-id-attr',\n            ],\nSpecRule::CHILD_TAGS => [\n                'childTagNameOneof' => [\n                    'AMP-ANALYTICS',\n                    'AMP-PIXEL',\n                    'AMP-STORY-ANIMATION',\n                    'AMP-STORY-CTA-LAYER',\n                    'AMP-STORY-GRID-LAYER',\n                    'AMP-STORY-PAGE-ATTACHMENT',\n                ],\n                'mandatoryMinNumChildTags' => 1,\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::SATISFIES => [\n                'amp-story-page',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-story',\n            ],\n];";
}
