<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class NoscriptImg
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::IMG,\nSpecRule::SPEC_NAME => 'noscript > img',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALT,\n    ],\n    [\n        SpecRule::NAME => Attribute::ATTRIBUTION,\n    ],\n    [\n        SpecRule::NAME => Attribute::BORDER,\n    ],\n    [\n        SpecRule::NAME => Attribute::DECODING,\n        SpecRule::VALUE => [\n                        'async',\n                        'auto',\n                        'sync',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::HEIGHT,\n    ],\n    [\n        SpecRule::NAME => Attribute::IMPORTANCE,\n    ],\n    [\n        SpecRule::NAME => Attribute::ISMAP,\n    ],\n    [\n        SpecRule::NAME => Attribute::INTRINSICSIZE,\n    ],\n    [\n        SpecRule::NAME => Attribute::LOADING,\n    ],\n    [\n        SpecRule::NAME => Attribute::LONGDESC,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'http',\n                            'https',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SIZES,\n    ],\n    [\n        SpecRule::NAME => Attribute::WIDTH,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'mandatory-src-or-srcset',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',\nSpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,\nSpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::IMG,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'img',\n];";
}
