<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Iframe
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::IFRAME,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::FRAMEBORDER,\n        SpecRule::VALUE => [\n                        '0',\n                        '1',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::HEIGHT,\n    ],\n    [\n        SpecRule::NAME => Attribute::REFERRERPOLICY,\n    ],\n    [\n        SpecRule::NAME => Attribute::RESIZABLE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SANDBOX,\n    ],\n    [\n        SpecRule::NAME => Attribute::SCROLLING,\n        SpecRule::VALUE => [\n                        'auto',\n                        'yes',\n                        'no',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::MANDATORY_ONEOF => '[\\'src\\', \\'srcdoc\\']',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'data',\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SRCDOC,\n        SpecRule::MANDATORY_ONEOF => '[\\'src\\', \\'srcdoc\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::WIDTH,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'name-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-iframe/',\nSpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,\nSpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::IFRAME,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\n];";
}
