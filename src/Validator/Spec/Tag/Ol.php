<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Ol extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::OL,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'reversed',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'start',
                SpecRule::VALUE_REGEX => '[0-9]*',
            ],
            [
                SpecRule::NAME => 'type',
                SpecRule::VALUE_REGEX => '[1AaIi]',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
