<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class StyleAmpRuntimeTransformed
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::STYLE,\nSpecRule::SPEC_NAME => 'style[amp-runtime] (transformed)',\nSpecRule::MANDATORY => true,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AMP_RUNTIME,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::I_AMPHTML_VERSION,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '^\\d{15}|latest\$',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::ENABLED_BY => [\n                'transformed',\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'style[amp-runtime]',\n];";
}
