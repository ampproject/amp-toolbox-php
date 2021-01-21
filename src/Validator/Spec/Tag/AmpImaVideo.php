<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpImaVideo
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::IMA_VIDEO,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SRC,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_TAG,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DOCK,\n        SpecRule::REQUIRES_EXTENSION => [\n                        'amp-video-docking',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ROTATE_TO_FULLSCREEN,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ima-video/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-ima-video',\n            ],\n];";
}
