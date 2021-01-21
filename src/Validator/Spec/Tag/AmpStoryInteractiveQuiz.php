<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryInteractiveQuiz
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_QUIZ,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::OPTION_1_CORRECT,\n        SpecRule::MANDATORY_ONEOF => '[\\'option-1-correct\\', \\'option-2-correct\\', \\'option-3-correct\\', \\'option-4-correct\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_2_CORRECT,\n        SpecRule::MANDATORY_ONEOF => '[\\'option-1-correct\\', \\'option-2-correct\\', \\'option-3-correct\\', \\'option-4-correct\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_3_CORRECT,\n        SpecRule::MANDATORY_ONEOF => '[\\'option-1-correct\\', \\'option-2-correct\\', \\'option-3-correct\\', \\'option-4-correct\\']',\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'option-3-text',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_4_CORRECT,\n        SpecRule::MANDATORY_ONEOF => '[\\'option-1-correct\\', \\'option-2-correct\\', \\'option-3-correct\\', \\'option-4-correct\\']',\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'option-4-text',\n                        ],\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'interactive-options-text-attrs',\n                'interactive-options-confetti-attrs',\n                'interactive-shared-configs-attrs',\n            ],\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-story-interactive',\n            ],\n];";
}
