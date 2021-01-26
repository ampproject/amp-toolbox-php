<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
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
                SpecRule::NAME => Attribute::CONTROLS,
                SpecRule::VALUE => [
                    'gyroscope',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DURATION,
                SpecRule::VALUE_REGEX => '([0-9\.]+)\s*(s|ms)',
            ],
            [
                SpecRule::NAME => Attribute::HEADING_END,
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DURATION,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::HEADING_START,
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => Attribute::PITCH_END,
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DURATION,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::PITCH_START,
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => Attribute::SCENE_HEADING,
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => Attribute::SCENE_PITCH,
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => Attribute::SCENE_ROLL,
                SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
            ],
            [
                SpecRule::NAME => Attribute::ZOOM_END,
                SpecRule::VALUE_REGEX => '\d+\.?\d*',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DURATION,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::ZOOM_START,
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
