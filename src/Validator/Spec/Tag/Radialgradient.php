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

final class Radialgradient extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::RADIALGRADIENT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'cx',
            ],
            [
                SpecRule::NAME => 'cy',
            ],
            [
                SpecRule::NAME => 'externalresourcesrequired',
            ],
            [
                SpecRule::NAME => 'fr',
            ],
            [
                SpecRule::NAME => 'fx',
            ],
            [
                SpecRule::NAME => 'fy',
            ],
            [
                SpecRule::NAME => 'gradienttransform',
            ],
            [
                SpecRule::NAME => 'gradientunits',
            ],
            [
                SpecRule::NAME => 'r',
            ],
            [
                SpecRule::NAME => 'spreadmethod',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'svg-core-attributes',
            'svg-presentation-attributes',
            'svg-style-attr',
            'svg-xlink-attributes',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
