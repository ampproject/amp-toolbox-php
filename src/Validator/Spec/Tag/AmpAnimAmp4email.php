<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpAnimAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::ANIM,
        SpecRule::SPEC_NAME => 'AMP-ANIM (AMP4EMAIL)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'alt',
            ],
            [
                SpecRule::NAME => 'attribution',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'mandatory-src-amp4email',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-anim/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
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
        SpecRule::REQUIRES_EXTENSION => [
            'amp-anim',
        ],
    ];
}
