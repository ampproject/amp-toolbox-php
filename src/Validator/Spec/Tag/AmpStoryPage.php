<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryPage extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_PAGE,
        SpecRule::MANDATORY_PARENT => Extension::STORY,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'auto-advance-after',
            ],
            [
                SpecRule::NAME => 'background-audio',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'http',
                        'https',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'next-page-no-ad',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-id-attr',
        ],
        SpecRule::CHILD_TAGS => [
            'childTagNameOneof' => [
                'AMP-ANALYTICS',
                'AMP-PIXEL',
                'AMP-STORY-ANIMATION',
                'AMP-STORY-CTA-LAYER',
                'AMP-STORY-GRID-LAYER',
                'AMP-STORY-PAGE-ATTACHMENT',
            ],
            'mandatoryMinNumChildTags' => 1,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'amp-story-page',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-story',
        ],
    ];
}
