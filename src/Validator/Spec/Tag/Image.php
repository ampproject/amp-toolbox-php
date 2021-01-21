<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Image
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::IMAGE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,\n    ],\n    [\n        SpecRule::NAME => Attribute::HEIGHT,\n    ],\n    [\n        SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,\n    ],\n    [\n        SpecRule::NAME => Attribute::TRANSFORM,\n    ],\n    [\n        SpecRule::NAME => Attribute::WIDTH,\n    ],\n    [\n        SpecRule::NAME => Attribute::X,\n    ],\n    [\n        SpecRule::NAME => Attribute::XLINK_ACTUATE,\n    ],\n    [\n        SpecRule::NAME => Attribute::XLINK_ARCROLE,\n    ],\n    [\n        SpecRule::NAME => Attribute::XLINK_HREF,\n        SpecRule::ALTERNATIVE_NAMES => [\n                        'href',\n                    ],\n        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\\s)data:image\\/svg\\+xml',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'data',\n                            'http',\n                            'https',\n                        ],\n                        SpecRule::ALLOW_EMPTY => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::XLINK_ROLE,\n    ],\n    [\n        SpecRule::NAME => Attribute::XLINK_SHOW,\n    ],\n    [\n        SpecRule::NAME => Attribute::XLINK_TITLE,\n    ],\n    [\n        SpecRule::NAME => Attribute::XLINK_TYPE,\n    ],\n    [\n        SpecRule::NAME => Attribute::Y,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'svg-conditional-processing-attributes',\n                'svg-core-attributes',\n                'svg-presentation-attributes',\n                'svg-style-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',\nSpecRule::MANDATORY_ANCESTOR => Element::SVG,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
