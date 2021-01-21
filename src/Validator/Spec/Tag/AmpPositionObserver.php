<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpPositionObserver
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::POSITION_OBSERVER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::INTERSECTION_RATIOS,\n        SpecRule::VALUE_REGEX => '^([0]*?\\.\\d*\$|1\$|0\$)|([0]*?\\.\\d*|1|0)\\s{1}([0]*?\\.\\d*\$|1\$|0\$)',\n    ],\n    [\n        SpecRule::NAME => Attribute::ONCE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TARGET,\n    ],\n    [\n        SpecRule::NAME => Attribute::VIEWPORT_MARGINS,\n        SpecRule::VALUE_REGEX => '^(\\d+\$|\\d+px\$|\\d+vh\$)|((\\d+|\\d+px|\\d+vh)\\s{1}(\\d+\$|\\d+px\$|\\d+vh\$))',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-position-observer',\n            ],\n];";
}
