<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAnalyticsExtensionJsonScript
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SCRIPT,\nSpecRule::SPEC_NAME => 'amp-analytics extension .json script',\nSpecRule::MANDATORY_PARENT => Extension::ANALYTICS,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'application/json',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-analytics/',\nSpecRule::CDATA => [\n                SpecRule::DISALLOWED_CDATA_REGEX => [\n                    [\n                        'regex' => '<!--',\n                        'errorMessage' => 'html comments',\n                    ],\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-analytics',\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'amp-analytics extension .json script',\n];";
}
