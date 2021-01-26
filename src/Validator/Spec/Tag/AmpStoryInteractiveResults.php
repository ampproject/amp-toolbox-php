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
                SpecRule::NAME => Attribute::OPTION_1_RESULTS_CATEGORY,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::OPTION_2_RESULTS_CATEGORY,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::OPTION_3_RESULTS_CATEGORY,
            ],
            [
                SpecRule::NAME => Attribute::OPTION_4_RESULTS_CATEGORY,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_3_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::OPTION_1_IMAGE,
            ],
            [
                SpecRule::NAME => Attribute::OPTION_2_IMAGE,
            ],
            [
                SpecRule::NAME => Attribute::OPTION_3_IMAGE,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_3_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::OPTION_4_IMAGE,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_4_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::OPTION_1_TEXT,
            ],
            [
                SpecRule::NAME => Attribute::OPTION_2_TEXT,
            ],
            [
                SpecRule::NAME => Attribute::OPTION_3_TEXT,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_3_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::OPTION_4_TEXT,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_4_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::OPTION_1_RESULTS_THRESHOLD,
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
            ],
            [
                SpecRule::NAME => Attribute::OPTION_2_RESULTS_THRESHOLD,
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
            ],
            [
                SpecRule::NAME => Attribute::OPTION_3_RESULTS_THRESHOLD,
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_3_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::OPTION_4_RESULTS_THRESHOLD,
                SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::OPTION_4_RESULTS_CATEGORY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::PROMPT_TEXT,
            ],
            [
                SpecRule::NAME => Attribute::THEME,
                SpecRule::VALUE => [
                    'light',
                    'dark',
                ],
            ],
            [
                SpecRule::NAME => Attribute::CHIP_STYLE,
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
