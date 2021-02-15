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

final class Fespotlight extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::FESPOTLIGHT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::LIMITINGCONEANGLE,
            ],
            [
                SpecRule::NAME => Attribute::POINTSATX,
            ],
            [
                SpecRule::NAME => Attribute::POINTSATY,
            ],
            [
                SpecRule::NAME => Attribute::POINTSATZ,
            ],
            [
                SpecRule::NAME => Attribute::SPECULAREXPONENT,
            ],
            [
                SpecRule::NAME => Attribute::X,
            ],
            [
                SpecRule::NAME => Attribute::Y,
            ],
            [
                SpecRule::NAME => Attribute::Z,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'svg-core-attributes',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
