<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Time
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::TIME,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATETIME,\n    ],\n    [\n        SpecRule::NAME => Attribute::PUBDATE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\n];";
}
