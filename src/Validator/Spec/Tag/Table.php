<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Table
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::TABLE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALIGN,\n    ],\n    [\n        SpecRule::NAME => Attribute::BGCOLOR,\n    ],\n    [\n        SpecRule::NAME => Attribute::BORDER,\n        SpecRule::VALUE => [\n                        '0',\n                        '1',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::CELLPADDING,\n    ],\n    [\n        SpecRule::NAME => Attribute::CELLSPACING,\n    ],\n    [\n        SpecRule::NAME => Attribute::SORTABLE,\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::WIDTH,\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\n];";
}
