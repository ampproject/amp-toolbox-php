<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpListAmp4email
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::LIST_,\nSpecRule::SPEC_NAME => 'AMP-LIST (AMP4EMAIL)',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::BINDING,\n        SpecRule::VALUE => [\n                        'always',\n                        'no',\n                        'refresh',\n                        'refresh-evaluate',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DIFFABLE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ITEMS,\n    ],\n    [\n        SpecRule::NAME => Attribute::MAX_ITEMS,\n    ],\n    [\n        SpecRule::NAME => Attribute::SINGLE_ITEM,\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TEMPLATE,\n        SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',\n    ],\n    [\n        SpecRule::NAME => Attribute::XSSI_PREFIX,\n    ],\n    [\n        SpecRule::NAME => '[IS_LAYOUT_CONTAINER]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::CONTAINER,\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-LIST',\n                'AMP-STATE',\n                'TEMPLATE',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4EMAIL,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-list',\n            ],\n];";
}
