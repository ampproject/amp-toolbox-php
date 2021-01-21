<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Select
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SELECT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOFOCUS,\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DISABLED,\n    ],\n    [\n        SpecRule::NAME => Attribute::MULTIPLE,\n    ],\n    [\n        SpecRule::NAME => Attribute::NO_VERIFY,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::REQUIRED,\n    ],\n    [\n        SpecRule::NAME => Attribute::SIZE,\n    ],\n    [\n        SpecRule::NAME => '[AUTOFOCUS]',\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n    [\n        SpecRule::NAME => '[DISABLED]',\n    ],\n    [\n        SpecRule::NAME => '[MULTIPLE]',\n    ],\n    [\n        SpecRule::NAME => '[REQUIRED]',\n    ],\n    [\n        SpecRule::NAME => '[SIZE]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'name-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\n];";
}
