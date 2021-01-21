<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class InputMaskDateMmYy
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::INPUT,\nSpecRule::SPEC_NAME => 'input [mask=date-mm-yy]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::MASK,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'date-mm-yy',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'amp-inputmask-common-attr',\n                'input-common-attr',\n                'name-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-inputmask',\n            ],\n];";
}
