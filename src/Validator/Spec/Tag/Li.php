<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Li extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::LI,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'value',
                SpecRule::VALUE_REGEX => '[0-9]*',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
