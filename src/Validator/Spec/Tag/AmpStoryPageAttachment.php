<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryPageAttachment extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_PAGE_ATTACHMENT,
        SpecRule::SPEC_NAME => 'amp-story-page-attachment',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'layout',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'nodisplay',
                ],
            ],
            [
                SpecRule::NAME => 'theme',
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
        SpecRule::DESCENDANT_TAG_LIST => 'amp-story-page-attachment-allowed-descendants',
        SpecRule::MANDATORY_LAST_CHILD => true,
    ];
}
