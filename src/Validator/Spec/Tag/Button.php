<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Button
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::BUTTON,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DISABLED,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ROLE,\n        SpecRule::IMPLICIT => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::TABINDEX,\n        SpecRule::IMPLICIT => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n    ],\n    [\n        SpecRule::NAME => Attribute::VALUE,\n    ],\n    [\n        SpecRule::NAME => '[DISABLED]',\n    ],\n    [\n        SpecRule::NAME => '[TYPE]',\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n    [\n        SpecRule::NAME => '[VALUE]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'name-attr',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\n];";
}
