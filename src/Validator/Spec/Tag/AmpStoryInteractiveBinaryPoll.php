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

final class AmpStoryInteractiveBinaryPoll extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_BINARY_POLL,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'option-1-text',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'option-2-text',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'option-1-confetti',
            ],
            [
                SpecRule::NAME => 'option-2-confetti',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'interactive-shared-configs-attrs',
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-story-interactive',
        ],
    ];
}
