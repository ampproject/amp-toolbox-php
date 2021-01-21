<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAutocompleteJson
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SCRIPT,\nSpecRule::SPEC_NAME => 'amp-autocomplete JSON',\nSpecRule::MANDATORY_PARENT => Extension::AUTOCOMPLETE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'application/json',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::CDATA => [\n                SpecRule::DISALLOWED_CDATA_REGEX => [\n                    [\n                        'regex' => '<!--',\n                        'errorMessage' => 'html comments',\n                    ],\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-autocomplete',\n            ],\n];";
}
