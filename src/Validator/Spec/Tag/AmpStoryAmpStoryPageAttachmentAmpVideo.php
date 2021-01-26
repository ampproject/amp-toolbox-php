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

final class AmpStoryAmpStoryPageAttachmentAmpVideo extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::VIDEO,
        SpecRule::SPEC_NAME => 'amp-story >> amp-story-page-attachment >> amp-video',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'poster',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'amp-video-common',
            'lightboxable-elements',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE_ATTACHMENT,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::ALSO_REQUIRES_TAG_WARNING => [
            'amp-video extension script',
        ],
    ];
}