<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpImageSlider
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::IMAGE_SLIDER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DISABLE_HINT_REAPPEAR,\n    ],\n    [\n        SpecRule::NAME => Attribute::INITIAL_SLIDER_POSITION,\n        SpecRule::VALUE_REGEX => '0(\\.[0-9]+)?|1(\\.0+)?',\n    ],\n    [\n        SpecRule::NAME => Attribute::STEP_SIZE,\n        SpecRule::VALUE_REGEX => '0(\\.[0-9]+)?|1(\\.0+)?',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-image-slider/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FIXED,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::CHILD_TAGS => [\n                'childTagNameOneof' => [\n                    'AMP-IMG',\n                    'DIV',\n                ],\n                'mandatoryMinNumChildTags' => 2,\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-image-slider',\n            ],\nSpecRule::DISABLED_BY => [\n                'transformed',\n            ],\n];";
}
