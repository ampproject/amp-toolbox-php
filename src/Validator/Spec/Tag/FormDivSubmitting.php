<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class FormDivSubmitting
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::DIV,\nSpecRule::SPEC_NAME => 'FORM DIV [submitting]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALIGN,\n    ],\n    [\n        SpecRule::NAME => Attribute::SUBMITTING,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::MANDATORY_ANCESTOR => Element::FORM,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\n];";
}
