<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class VideoSource
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SOURCE,\nSpecRule::SPEC_NAME => 'video > source',\nSpecRule::MANDATORY_PARENT => Element::VIDEO,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::MEDIA,\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
