<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Svg
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SVG,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CONTENTSCRIPTTYPE,\n    ],\n    [\n        SpecRule::NAME => Attribute::CONTENTSTYLETYPE,\n    ],\n    [\n        SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,\n    ],\n    [\n        SpecRule::NAME => Attribute::HEIGHT,\n    ],\n    [\n        SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,\n    ],\n    [\n        SpecRule::NAME => Attribute::VERSION,\n        SpecRule::VALUE => [\n                        '1.0',\n                        '1.1',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::VIEWBOX,\n    ],\n    [\n        SpecRule::NAME => Attribute::WIDTH,\n    ],\n    [\n        SpecRule::NAME => Attribute::X,\n    ],\n    [\n        SpecRule::NAME => Attribute::Y,\n    ],\n    [\n        SpecRule::NAME => Attribute::ZOOMANDPAN,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'svg-conditional-processing-attributes',\n                'svg-core-attributes',\n                'svg-presentation-attributes',\n                'svg-style-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
