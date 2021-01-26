<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryInteractiveQuiz extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_QUIZ,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'option-1-correct',
                SpecRule::MANDATORY_ONEOF => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
            ],
            [
                SpecRule::NAME => 'option-2-correct',
                SpecRule::MANDATORY_ONEOF => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
            ],
            [
                SpecRule::NAME => 'option-3-correct',
                SpecRule::MANDATORY_ONEOF => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                SpecRule::TRIGGER => [
                    'alsoRequiresAttr' => [
                        'option-3-text',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'option-4-correct',
                SpecRule::MANDATORY_ONEOF => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                SpecRule::TRIGGER => [
                    'alsoRequiresAttr' => [
                        'option-4-text',
                    ],
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'interactive-options-text-attrs',
            'interactive-options-confetti-attrs',
            'interactive-shared-configs-attrs',
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::STORY_INTERACTIVE,
        ],
    ];
}
