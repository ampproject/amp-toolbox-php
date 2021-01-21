<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpBaseCarouselLightbox
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::BASE_CAROUSEL,\nSpecRule::SPEC_NAME => 'AMP-BASE-CAROUSEL [lightbox]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::LIGHTBOX,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'amp-base-carousel-common',\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-base-carousel/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]',\n                ],\n                [\n                    'tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [child]',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-base-carousel',\n                'amp-lightbox-gallery',\n            ],\n];";
}
