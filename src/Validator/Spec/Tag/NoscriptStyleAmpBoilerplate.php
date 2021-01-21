<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class NoscriptStyleAmpBoilerplate
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::STYLE,\nSpecRule::SPEC_NAME => 'noscript > style[amp-boilerplate]',\nSpecRule::MANDATORY => true,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::NOSCRIPT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AMP_BOILERPLATE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',\nSpecRule::CDATA => [\n                SpecRule::CDATA_REGEX => '\\s*body\\s*{\\s*-webkit-animation:\\s*none;\\s*-moz-animation:\\s*none;\\s*-ms-animation:\\s*none;\\s*animation:\\s*none;?\\s*}\\s*',\n                SpecRule::DOC_CSS_BYTES => false,\n            ],\nSpecRule::MANDATORY_ANCESTOR => Element::HEAD,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::DISABLED_BY => [\n                'transformed',\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'noscript > style[amp-boilerplate]',\n];";
}
