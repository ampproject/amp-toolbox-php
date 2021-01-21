<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class PictureSource
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SOURCE,\nSpecRule::SPEC_NAME => 'picture > source',\nSpecRule::MANDATORY_PARENT => Element::PICTURE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::MEDIA,\n    ],\n    [\n        SpecRule::NAME => Attribute::SIZES,\n    ],\n    [\n        SpecRule::NAME => Attribute::SRCSET,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'data',\n                            'http',\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\n];";
}
