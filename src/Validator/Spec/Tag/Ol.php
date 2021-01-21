<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Ol
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::OL,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::REVERSED,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::START,\n        SpecRule::VALUE_REGEX => '[0-9]*',\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::VALUE_REGEX => '[1AaIi]',\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\n];";
}
