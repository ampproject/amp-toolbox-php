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

final class Td extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALIGN,
            ],
            [
                SpecRule::NAME => Attribute::BGCOLOR,
            ],
            [
                SpecRule::NAME => Attribute::COLSPAN,
            ],
            [
                SpecRule::NAME => Attribute::HEADERS,
            ],
            [
                SpecRule::NAME => Attribute::HEIGHT,
            ],
            [
                SpecRule::NAME => Attribute::ROWSPAN,
            ],
            [
                SpecRule::NAME => Attribute::VALIGN,
            ],
            [
                SpecRule::NAME => Attribute::WIDTH,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
