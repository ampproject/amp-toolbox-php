<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class IAmphtmlSizerIntrinsic
{
    const SPEC = "[\nSpecRule::TAG_NAME => Internal::SIZER,\nSpecRule::SPEC_NAME => 'I-AMPHTML-SIZER-INTRINSIC',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CLASS,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'i-amphtml-sizer',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::EXPLICIT_ATTRS_ONLY => true,\nSpecRule::ENABLED_BY => [\n                'transformed',\n            ],\n];";
}
