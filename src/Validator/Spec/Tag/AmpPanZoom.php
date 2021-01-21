<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpPanZoom
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::PAN_ZOOM,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DISABLE_DOUBLE_TAP,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::INITIAL_SCALE,\n        SpecRule::VALUE_REGEX => '[0-9]+(\\.[0-9]+)?',\n    ],\n    [\n        SpecRule::NAME => Attribute::INITIAL_X,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::INITIAL_Y,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::MAX_SCALE,\n        SpecRule::VALUE_REGEX => '[0-9]+(\\.[0-9]+)?',\n    ],\n    [\n        SpecRule::NAME => Attribute::RESET_ON_RESIZE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-pan-zoom',\n            ],\n];";
}
