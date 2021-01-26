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

final class Tspan extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TSPAN,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DX,
            ],
            [
                SpecRule::NAME => Attribute::DY,
            ],
            [
                SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
            ],
            [
                SpecRule::NAME => Attribute::LENGTHADJUST,
            ],
            [
                SpecRule::NAME => Attribute::ROTATE,
            ],
            [
                SpecRule::NAME => Attribute::TEXTLENGTH,
            ],
            [
                SpecRule::NAME => Attribute::X,
            ],
            [
                SpecRule::NAME => Attribute::Y,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'svg-conditional-processing-attributes',
            'svg-core-attributes',
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
