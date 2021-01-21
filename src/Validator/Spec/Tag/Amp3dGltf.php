<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Amp3dGltf
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::_3D_GLTF,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALPHA,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ANTIALIASING,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::AUTOROTATE,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::CLEARCOLOR,\n    ],\n    [\n        SpecRule::NAME => Attribute::ENABLEZOOM,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::MAXPIXELRATIO,\n        SpecRule::VALUE_REGEX => '[+-]?(\\d*\\.)?\\d+',\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-3d-gltf',\n            ],\n];";
}
