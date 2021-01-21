<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class StyleAmpCustomLengthCheck
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::STYLE,\nSpecRule::SPEC_NAME => 'style amp-custom-length-check',\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AMP_CUSTOM_LENGTH_CHECK,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::VALUE_CASEI => [\n                        'text/css',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::CDATA => [\n                SpecRule::MAX_BYTES => -1,\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'style amp-custom-length-check',\n];";
}
