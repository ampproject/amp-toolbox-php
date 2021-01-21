<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class HeadStyleAmp4adsBoilerplate
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::STYLE,\nSpecRule::SPEC_NAME => 'head > style[amp4ads-boilerplate]',\nSpecRule::MANDATORY => true,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AMP4ADS_BOILERPLATE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/?format=ads#boilerplate',\nSpecRule::CDATA => [\n                SpecRule::CDATA_REGEX => '\\s*body\\s*{\\s*visibility:\\s*hidden;?\\s*}\\s*',\n                SpecRule::DOC_CSS_BYTES => false,\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4ADS,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'head > style[amp4ads-boilerplate]',\n];";
}
