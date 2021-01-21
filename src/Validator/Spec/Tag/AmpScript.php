<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpScript
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::SCRIPT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_AMPDEVMODE,\n        SpecRule::VALUE => [\n                        'false',\n                    ],\n        SpecRule::DISALLOWED_VALUE_REGEX => 'false',\n    ],\n    [\n        SpecRule::NAME => Attribute::MAX_AGE,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'script',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::NODOM,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SANDBOX,\n    ],\n    [\n        SpecRule::NAME => Attribute::SCRIPT,\n        SpecRule::MANDATORY_ONEOF => '[\\'script\\', \\'src\\']',\n        SpecRule::VALUE_ONEOF_SET => 'AMP_SCRIPT_IDS',\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::MANDATORY_ONEOF => '[\\'script\\', \\'src\\']',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::CONTAINER,\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-SCRIPT',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-script',\n            ],\n];";
}
