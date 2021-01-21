<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpPixel
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::PIXEL,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALLOW_SSR_IMG,\n    ],\n    [\n        SpecRule::NAME => Attribute::REFERRERPOLICY,\n        SpecRule::VALUE => [\n                        'no-referrer',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => true,\n                        SpecRule::ALLOW_EMPTY => true,\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-pixel/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FIXED,\n                    Layout::NODISPLAY,\n                ],\n                'definesDefaultWidth' => true,\n                'definesDefaultHeight' => true,\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
