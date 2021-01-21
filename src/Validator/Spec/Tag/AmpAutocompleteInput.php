<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAutocompleteInput
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::INPUT,\nSpecRule::SPEC_NAME => 'amp-autocomplete > input',\nSpecRule::MANDATORY_PARENT => Extension::AUTOCOMPLETE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_CASEI => [\n                        'search',\n                        'text',\n                    ],\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-autocomplete',\n                'amp-form',\n            ],\n];";
}
