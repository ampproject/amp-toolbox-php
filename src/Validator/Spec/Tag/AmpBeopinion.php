<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpBeopinion
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::BEOPINION,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_ACCOUNT,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX_CASEI => '[0-9a-f]{24}',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_CONTENT,\n        SpecRule::VALUE_REGEX_CASEI => '[0-9a-f]{24}',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_MY_CONTENT,\n        SpecRule::VALUE => [\n                        '0',\n                        '1',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_NAME,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-beopinion',\n            ],\n];";
}
