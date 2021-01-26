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

final class AmpImageSliderTransformed extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::IMAGE_SLIDER,
        SpecRule::SPEC_NAME => 'amp-image-slider (transformed)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'disable-hint-reappear',
            ],
            [
                SpecRule::NAME => 'initial-slider-position',
                SpecRule::VALUE_REGEX => '0(\.[0-9]+)?|1(\.0+)?',
            ],
            [
                SpecRule::NAME => 'step-size',
                SpecRule::VALUE_REGEX => '0(\.[0-9]+)?|1(\.0+)?',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-image-slider/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FIXED,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::CHILD_TAGS => [
            SpecRule::CHILD_TAG_NAME_ONEOF => [
                'AMP-IMG',
                'DIV',
                'I-AMPHTML-SIZER',
            ],
            SpecRule::MANDATORY_MIN_NUM_CHILD_TAGS => 2,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::IMAGE_SLIDER,
        ],
        SpecRule::ENABLED_BY => [
            'transformed',
        ],
    ];
}
