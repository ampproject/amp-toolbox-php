<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class InputMaskCustomMask
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::INPUT,\nSpecRule::SPEC_NAME => 'input [mask] (custom mask)',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::MASK,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '(payment-card|date-dd-mm-yyyy|date-mm-dd-yyyy|date-mm-yy|date-yyyy-mm-dd)',\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::MASK_TRIM_ZEROS,\n        SpecRule::VALUE_REGEX => '\\d+',\n    ],\n    [\n        SpecRule::NAME => '[TYPE]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'amp-inputmask-common-attr',\n                'input-common-attr',\n                'name-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-inputmask',\n            ],\n];";
}
