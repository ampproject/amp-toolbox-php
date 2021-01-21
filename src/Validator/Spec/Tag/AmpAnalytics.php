<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAnalytics
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::ANALYTICS,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CONFIG,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => true,\n                        SpecRule::ALLOW_EMPTY => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-analytics/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-analytics',\n            ],\n];";
}
