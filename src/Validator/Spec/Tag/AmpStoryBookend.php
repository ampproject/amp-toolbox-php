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
use AmpProject\Validator\Spec\Section\DescendantTagList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryBookend extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_BOOKEND,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::LAYOUT,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'nodisplay',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCENDANT_TAG_LIST => DescendantTagList::AMP_STORY_BOOKEND_ALLOWED_DESCENDANTS,
        SpecRule::MANDATORY_LAST_CHILD => true,
    ];
}
