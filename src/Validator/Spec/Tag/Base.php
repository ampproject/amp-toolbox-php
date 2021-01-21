<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Base
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::BASE,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::HREF,\n        SpecRule::VALUE => [\n                        '/',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TARGET,\n        SpecRule::VALUE_CASEI => [\n                        '_blank',\n                        '_self',\n                        '_top',\n                    ],\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
