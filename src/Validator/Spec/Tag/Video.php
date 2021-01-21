<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Video
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::VIDEO,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n    ],\n    [\n        SpecRule::NAME => Attribute::CONTROLS,\n    ],\n    [\n        SpecRule::NAME => Attribute::HEIGHT,\n    ],\n    [\n        SpecRule::NAME => Attribute::LOOP,\n    ],\n    [\n        SpecRule::NAME => Attribute::MUTED,\n        SpecRule::DEPRECATION => 'autoplay',\n        SpecRule::DEPRECATION_URL => 'https://amp.dev/documentation/components/amp-video/',\n    ],\n    [\n        SpecRule::NAME => Attribute::PLAYSINLINE,\n    ],\n    [\n        SpecRule::NAME => Attribute::POSTER,\n    ],\n    [\n        SpecRule::NAME => Attribute::PRELOAD,\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'data',\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::WIDTH,\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',\nSpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,\nSpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::VIDEO,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\n];";
}
