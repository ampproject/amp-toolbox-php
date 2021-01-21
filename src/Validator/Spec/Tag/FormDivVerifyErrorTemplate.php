<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class FormDivVerifyErrorTemplate
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::DIV,\nSpecRule::SPEC_NAME => 'FORM DIV [verify-error][template]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALIGN,\n    ],\n    [\n        SpecRule::NAME => Attribute::VERIFY_ERROR,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::TEMPLATE,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::MANDATORY_ANCESTOR => Element::FORM,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
