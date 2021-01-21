<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class HtmlDoctype
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::_DOCTYPE,\nSpecRule::SPEC_NAME => 'html doctype',\nSpecRule::MANDATORY => true,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => '\$ROOT',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::HTML,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::LANG,\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::EXPLICIT_ATTRS_ONLY => true,\nSpecRule::DESCRIPTIVE_NAME => 'html !doctype',\n];";
}
