<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpBodymovinAnimation
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::BODYMOVIN_ANIMATION,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::LOOP,\n        SpecRule::VALUE_REGEX_CASEI => '[1-9][0-9]*|false|true',\n    ],\n    [\n        SpecRule::NAME => Attribute::NOAUTOPLAY,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::RENDERER,\n        SpecRule::VALUE_CASEI => [\n                        'svg',\n                        'html',\n                    ],\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bodymovin-animation/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-bodymovin-animation',\n            ],\n];";
}
