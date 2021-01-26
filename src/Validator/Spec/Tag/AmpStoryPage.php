<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryPage extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_PAGE,
        SpecRule::MANDATORY_PARENT => Extension::STORY,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTO_ADVANCE_AFTER,
            ],
            [
                SpecRule::NAME => Attribute::BACKGROUND_AUDIO,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::NEXT_PAGE_NO_AD,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-id-attr',
        ],
        SpecRule::CHILD_TAGS => [
            SpecRule::CHILD_TAG_NAME_ONEOF => [
                'AMP-ANALYTICS',
                'AMP-PIXEL',
                'AMP-STORY-ANIMATION',
                'AMP-STORY-CTA-LAYER',
                'AMP-STORY-GRID-LAYER',
                'AMP-STORY-PAGE-ATTACHMENT',
            ],
            SpecRule::MANDATORY_MIN_NUM_CHILD_TAGS => 1,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'amp-story-page',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::STORY,
        ],
    ];
}
