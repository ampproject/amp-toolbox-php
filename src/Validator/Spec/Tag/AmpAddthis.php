<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAddthis
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::ADDTHIS,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_PRODUCT_CODE,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-product-code\\', \\'data-widget-id\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SHARE_MEDIA,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'http',\n                            'https',\n                        ],\n                        SpecRule::ALLOW_EMPTY => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SHARE_URL,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'http',\n                            'https',\n                        ],\n                        SpecRule::ALLOW_EMPTY => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_WIDGET_ID,\n        SpecRule::MANDATORY_ONEOF => '[\\'data-product-code\\', \\'data-widget-id\\']',\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'data-pub-id',\n                        ],\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-addthis',\n            ],\n];";
}
