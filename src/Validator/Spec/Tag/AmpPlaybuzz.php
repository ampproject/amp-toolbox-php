<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpPlaybuzz
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::PLAYBUZZ,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_COMMENTS,\n        SpecRule::VALUE_CASEI => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_ITEM,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-item\\', \\'src\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_ITEM_INFO,\n        SpecRule::VALUE_CASEI => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SHARE_BUTTONS,\n        SpecRule::VALUE_CASEI => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-item\\', \\'src\\']',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::RESPONSIVE,\n                    Layout::FIXED_HEIGHT,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-playbuzz',\n            ],\n];";
}
