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
use AmpProject\Validator\Spec\DescendantTagList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryPageAttachment extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'amp-story-page-attachment';

    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_PAGE_ATTACHMENT,
        SpecRule::SPEC_NAME => 'amp-story-page-attachment',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CTA_TEXT,
            ],
            [
                SpecRule::NAME => Attribute::TITLE,
            ],
            [
                SpecRule::NAME => Attribute::CTA_IMAGE,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::CTA_IMAGE_2,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::LAYOUT,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'nodisplay',
                ],
            ],
            [
                SpecRule::NAME => Attribute::THEME,
                SpecRule::VALUE => [
                    'dark',
                    'light',
                ],
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCENDANT_TAG_LIST => DescendantTagList\AmpStoryPageAttachmentAllowedDescendants::ID,
        SpecRule::MANDATORY_LAST_CHILD => true,
    ];
}
