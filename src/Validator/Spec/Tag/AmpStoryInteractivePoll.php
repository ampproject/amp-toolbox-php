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

final class AmpStoryInteractivePoll extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_POLL,
        SpecRule::ATTR_LISTS => [
            'interactive-options-text-attrs',
            'interactive-options-confetti-attrs',
            'interactive-options-results-category-attrs',
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
