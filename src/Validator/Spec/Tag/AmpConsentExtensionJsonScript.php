<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpConsentExtensionJsonScript
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SCRIPT,\nSpecRule::SPEC_NAME => 'amp-consent extension .json script',\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Extension::CONSENT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'application/json',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::CDATA => [\n                SpecRule::DISALLOWED_CDATA_REGEX => [\n                    [\n                        'regex' => '<!--',\n                        'errorMessage' => 'html comments',\n                    ],\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::SATISFIES => [\n                'amp-consent extension .json script',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-consent',\n            ],\n];";
}
