<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryInteractiveResults extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_RESULTS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'option-1-results-category',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'option-2-results-category',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'option-3-results-category',
            ],
            [
                SpecRule::NAME => 'option-4-results-category',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_3_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'option-1-image',
            ],
            [
                SpecRule::NAME => 'option-2-image',
            ],
            [
                SpecRule::NAME => 'option-3-image',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_3_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'option-4-image',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_4_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'option-1-text',
            ],
            [
                SpecRule::NAME => 'option-2-text',
            ],
            [
                SpecRule::NAME => 'option-3-text',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_3_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'option-4-text',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_4_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'option-1-results-threshold',
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
            ],
            [
                SpecRule::NAME => 'option-2-results-threshold',
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
            ],
            [
                SpecRule::NAME => 'option-3-results-threshold',
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_3_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'option-4-results-threshold',
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_4_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'prompt-text',
            ],
            [
                SpecRule::NAME => 'theme',
                SpecRule::VALUE => [
                    'light',
                    'dark',
                ],
            ],
            [
                SpecRule::NAME => 'chip-style',
                SpecRule::VALUE => [
                    'flat',
                    'transparent',
                ],
            ],
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
