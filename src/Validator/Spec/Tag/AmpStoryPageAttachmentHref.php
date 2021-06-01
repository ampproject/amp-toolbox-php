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

final class AmpStoryPageAttachmentHref extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'amp-story-page-attachment[href]';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_PAGE_ATTACHMENT,
        SpecRule::SPEC_NAME => 'amp-story-page-attachment[href]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CTA_ACCENT_COLOR,
            ],
            [
                SpecRule::NAME => Attribute::CTA_ACCENT_ELEMENT,
                SpecRule::VALUE => [
                    'background',
                    'text',
                ],
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
                SpecRule::NAME => Attribute::CTA_TEXT,
            ],
            [
                SpecRule::NAME => Attribute::HREF,
                SpecRule::MANDATORY => true,
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
                    'custom',
                    'dark',
                    'light',
                ],
            ],
            [
                SpecRule::NAME => Attribute::TITLE,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,
        SpecRule::CHILD_TAGS => [
            SpecRule::MANDATORY_NUM_CHILD_TAGS => 0,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::MANDATORY_LAST_CHILD => true,
    ];
}
