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

final class AmpVideoIframeWithPlaceholderTransformed extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::VIDEO_IFRAME,
        SpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME with [placeholder] (transformed)',
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'amp-video-iframe-common',
            'lightboxable-elements',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',
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
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-VIDEO-IFRAME > [placeholder]',
                SpecRule::MANDATORY => true,
                SpecRule::UNIQUE => true,
            ],
            [
                'tagSpecName' => 'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::VIDEO_IFRAME,
        ],
        SpecRule::ENABLED_BY => [
            'transformed',
        ],
    ];
}
