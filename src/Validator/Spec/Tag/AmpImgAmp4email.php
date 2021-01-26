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

final class AmpImgAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::IMG,
        SpecRule::SPEC_NAME => 'AMP-IMG (AMP4EMAIL)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'alt',
            ],
            [
                SpecRule::NAME => 'attribution',
            ],
            [
                SpecRule::NAME => 'placeholder',
            ],
            [
                SpecRule::NAME => '[alt]',
            ],
            [
                SpecRule::NAME => '[attribution]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'mandatory-src-amp4email',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
    ];
}
