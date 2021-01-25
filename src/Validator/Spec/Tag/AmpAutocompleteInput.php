<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpAutocompleteInput extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::INPUT,
        SpecRule::SPEC_NAME => 'amp-autocomplete > input',
        SpecRule::MANDATORY_PARENT => Extension::AUTOCOMPLETE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'type',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_CASEI => [
                    'search',
                    'text',
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-autocomplete',
            'amp-form',
        ],
    ];
}
