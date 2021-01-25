<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Progress extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::PROGRESS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'max',
            ],
            [
                SpecRule::NAME => 'value',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
