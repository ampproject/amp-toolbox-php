<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAutocompleteAmp4email
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::AUTOCOMPLETE,\nSpecRule::SPEC_NAME => 'AMP-AUTOCOMPLETE (AMP4EMAIL)',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::HIGHLIGHT_USER_ENTRY,\n    ],\n    [\n        SpecRule::NAME => Attribute::INLINE,\n    ],\n    [\n        SpecRule::NAME => Attribute::ITEMS,\n    ],\n    [\n        SpecRule::NAME => Attribute::MAX_ITEMS,\n    ],\n    [\n        SpecRule::NAME => Attribute::MIN_CHARACTERS,\n    ],\n    [\n        SpecRule::NAME => Attribute::PREFETCH,\n    ],\n    [\n        SpecRule::NAME => Attribute::QUERY,\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'src',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SUBMIT_ON_ENTER,\n    ],\n    [\n        SpecRule::NAME => Attribute::SUGGEST_FIRST,\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TEMPLATE,\n        SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::CONTAINER,\n                ],\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-AUTOCOMPLETE',\n                'AMP-STATE',\n                'TEMPLATE',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4EMAIL,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-autocomplete',\n            ],\n];";
}
