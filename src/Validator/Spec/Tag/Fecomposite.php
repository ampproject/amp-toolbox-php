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

final class Fecomposite extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::FECOMPOSITE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::IN,
            ],
            [
                SpecRule::NAME => Attribute::IN2,
            ],
            [
                SpecRule::NAME => Attribute::K1,
            ],
            [
                SpecRule::NAME => Attribute::K2,
            ],
            [
                SpecRule::NAME => Attribute::K3,
            ],
            [
                SpecRule::NAME => Attribute::K4,
            ],
            [
                SpecRule::NAME => Attribute::OPERATOR,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'svg-core-attributes',
            'svg-filter-primitive-attributes',
            'svg-presentation-attributes',
            'svg-style-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
