<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Polygon
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::POLYGON,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,\n    ],\n    [\n        SpecRule::NAME => Attribute::POINTS,\n    ],\n    [\n        SpecRule::NAME => Attribute::SKETCH_TYPE,\n    ],\n    [\n        SpecRule::NAME => Attribute::TRANSFORM,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'svg-conditional-processing-attributes',\n                'svg-core-attributes',\n                'svg-presentation-attributes',\n                'svg-style-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',\nSpecRule::MANDATORY_ANCESTOR => Element::SVG,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
