<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpBaseCarouselLightbox extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::BASE_CAROUSEL,
        SpecRule::SPEC_NAME => 'AMP-BASE-CAROUSEL [lightbox]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'lightbox',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'amp-base-carousel-common',
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-base-carousel/',
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
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]',
            ],
            [
                'tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [child]',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-base-carousel',
            'amp-lightbox-gallery',
        ],
    ];
}
