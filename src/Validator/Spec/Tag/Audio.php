<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Audio
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::AUDIO,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n    ],\n    [\n        SpecRule::NAME => Attribute::CONTROLS,\n    ],\n    [\n        SpecRule::NAME => Attribute::LOOP,\n    ],\n    [\n        SpecRule::NAME => Attribute::MUTED,\n    ],\n    [\n        SpecRule::NAME => Attribute::PRELOAD,\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'data',\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',\nSpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,\nSpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::AUDIO,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\n];";
}
