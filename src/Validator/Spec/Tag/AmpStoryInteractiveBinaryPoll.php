<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryInteractiveBinaryPoll
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_BINARY_POLL,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::OPTION_1_TEXT,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_2_TEXT,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_1_CONFETTI,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_2_CONFETTI,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'interactive-shared-configs-attrs',\n            ],\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-story-interactive',\n            ],\n];";
}
