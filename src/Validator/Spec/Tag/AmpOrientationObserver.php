<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpOrientationObserver
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::ORIENTATION_OBSERVER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALPHA_RANGE,\n        SpecRule::VALUE_REGEX => '(\\d+)\\s{1}(\\d+)',\n    ],\n    [\n        SpecRule::NAME => Attribute::BETA_RANGE,\n        SpecRule::VALUE_REGEX => '(\\d+)\\s{1}(\\d+)',\n    ],\n    [\n        SpecRule::NAME => Attribute::GAMMA_RANGE,\n        SpecRule::VALUE_REGEX => '(\\d+)\\s{1}(\\d+)',\n    ],\n    [\n        SpecRule::NAME => Attribute::SMOOTHING,\n        SpecRule::VALUE_REGEX => '[0-9]+|',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-orientation-observer',\n            ],\n];";
}
