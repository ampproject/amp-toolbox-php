<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAdWithDataEnableRefreshAttribute
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::AD,\nSpecRule::SPEC_NAME => 'amp-ad with data-enable-refresh attribute',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALT,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_ENABLE_REFRESH,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::JSON,\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::FLUID,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-APP-BANNER',\n                'AMP-FX-FLYING-CARPET',\n                'AMP-LIGHTBOX',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::ALSO_REQUIRES_TAG_WARNING => [\n                'amp-ad extension script',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-ad',\n            ],\n];";
}
