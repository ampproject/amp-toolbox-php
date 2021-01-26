<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Meter extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::METER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::HIGH,
            ],
            [
                SpecRule::NAME => Attribute::LOW,
            ],
            [
                SpecRule::NAME => Attribute::MAX,
            ],
            [
                SpecRule::NAME => Attribute::MIN,
            ],
            [
                SpecRule::NAME => Attribute::OPTIMUM,
            ],
            [
                SpecRule::NAME => Attribute::VALUE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
