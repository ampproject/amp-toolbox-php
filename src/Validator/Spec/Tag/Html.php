<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Html
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::HTML,\nSpecRule::MANDATORY => true,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::_DOCTYPE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_AMP_AUTOCOMPLETE_OPT_IN,\n        SpecRule::VALUE => [\n                        'false',\n                    ],\n        SpecRule::DISALLOWED_VALUE_REGEX => 'false',\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::DISABLED_BY => [\n                'transformed',\n            ],\n];";
}
