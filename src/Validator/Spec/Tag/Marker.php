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

final class Marker extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::MARKER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
            ],
            [
                SpecRule::NAME => Attribute::MARKERHEIGHT,
            ],
            [
                SpecRule::NAME => Attribute::MARKERUNITS,
            ],
            [
                SpecRule::NAME => Attribute::MARKERWIDTH,
            ],
            [
                SpecRule::NAME => Attribute::ORIENT,
            ],
            [
                SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,
            ],
            [
                SpecRule::NAME => Attribute::REFX,
            ],
            [
                SpecRule::NAME => Attribute::REFY,
            ],
            [
                SpecRule::NAME => Attribute::TRANSFORM,
            ],
            [
                SpecRule::NAME => Attribute::VIEWBOX,
            ],
        ],
        SpecRule::ATTR_LISTS => [
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
