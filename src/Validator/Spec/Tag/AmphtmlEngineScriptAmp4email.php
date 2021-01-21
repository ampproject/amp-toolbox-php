<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmphtmlEngineScriptAmp4email
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SCRIPT,\nSpecRule::SPEC_NAME => 'amphtml engine script [AMP4EMAIL]',\nSpecRule::MANDATORY => true,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'https://cdn.ampproject.org/v0.js',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n                'amphtml-engine-attrs',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',\nSpecRule::CDATA => [\n                SpecRule::DISALLOWED_CDATA_REGEX => [\n                    [\n                        'regex' => '.',\n                        'errorMessage' => 'contents',\n                    ],\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4EMAIL,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'amphtml engine script',\n];";
}
