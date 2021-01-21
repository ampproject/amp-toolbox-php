<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class MetaCharsetUtf8
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::META,\nSpecRule::SPEC_NAME => 'meta charset=utf-8',\nSpecRule::MANDATORY => true,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CHARSET,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'utf-8',\n                    ],\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'meta charset=utf-8',\n];";
}
