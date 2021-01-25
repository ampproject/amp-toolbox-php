<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpVideoIframePoster extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::VIDEO_IFRAME,
        SpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME[poster]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'poster',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'amp-video-iframe-common',
            'lightboxable-elements',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-video-iframe',
        ],
    ];
}
