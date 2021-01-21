<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpFont
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::FONT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::FONT_FAMILY,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::FONT_STYLE,\n    ],\n    [\n        SpecRule::NAME => Attribute::FONT_VARIANT,\n    ],\n    [\n        SpecRule::NAME => Attribute::FONT_WEIGHT,\n    ],\n    [\n        SpecRule::NAME => Attribute::ON_ERROR_ADD_CLASS,\n    ],\n    [\n        SpecRule::NAME => Attribute::ON_ERROR_REMOVE_CLASS,\n    ],\n    [\n        SpecRule::NAME => Attribute::ON_LOAD_ADD_CLASS,\n    ],\n    [\n        SpecRule::NAME => Attribute::ON_LOAD_REMOVE_CLASS,\n    ],\n    [\n        SpecRule::NAME => Attribute::TIMEOUT,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-font',\n            ],\n];";
}
