<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStory360 extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_360,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'controls',
                SpecRule::VALUE => [
                    'gyroscope',
                ],
            ],
            [
                SpecRule::NAME => 'duration',
                SpecRule::VALUE_REGEX => '([0-9\.]+)\s*(s|ms)',
            ],
            [
                SpecRule::NAME => 'heading-end',
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                SpecRule::TRIGGER => [
                    'alsoRequiresAttr' => [
                        'duration',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'heading-start',
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => 'pitch-end',
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                SpecRule::TRIGGER => [
                    'alsoRequiresAttr' => [
                        'duration',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'pitch-start',
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => 'scene-heading',
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => 'scene-pitch',
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => 'scene-roll',
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => 'zoom-end',
                SpecRule::VALUE_REGEX => '\d+\.?\d*',
                SpecRule::TRIGGER => [
                    'alsoRequiresAttr' => [
                        'duration',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'zoom-start',
                SpecRule::VALUE_REGEX => '\d+\.?\d*',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story-360',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY,
        SpecRule::CHILD_TAGS => [
            SpecRule::MANDATORY_NUM_CHILD_TAGS => 1,
            SpecRule::CHILD_TAG_NAME_ONEOF => [
                'AMP-IMG',
                'AMP-VIDEO',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::STORY_360,
        ],
    ];
}
