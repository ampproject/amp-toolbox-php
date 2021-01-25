<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryBookend extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_BOOKEND,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'layout',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'nodisplay',
                ],
            ],
            [
                SpecRule::NAME => 'src',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'http',
                        'https',
                    ],
                ],
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCENDANT_TAG_LIST => 'amp-story-bookend-allowed-descendants',
        SpecRule::MANDATORY_LAST_CHILD => true,
    ];
}
