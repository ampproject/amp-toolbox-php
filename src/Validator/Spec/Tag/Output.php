<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Output extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::OUTPUT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'for',
            ],
            [
                SpecRule::NAME => 'form',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'name-attr',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
