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

final class AmpStreamGallery extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STREAM_GALLERY,
        SpecRule::ATTR_LISTS => [
            'amp-stream-gallery-common',
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://github.com/ampproject/amphtml/blob/master/extensions/amp-stream-gallery/amp-stream-gallery.md',
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
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::STREAM_GALLERY,
        ],
    ];
}
