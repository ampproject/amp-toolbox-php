<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Image extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::IMAGE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
            ],
            [
                SpecRule::NAME => Attribute::HEIGHT,
            ],
            [
                SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,
            ],
            [
                SpecRule::NAME => Attribute::TRANSFORM,
            ],
            [
                SpecRule::NAME => Attribute::WIDTH,
            ],
            [
                SpecRule::NAME => Attribute::X,
            ],
            [
                SpecRule::NAME => Attribute::XLINK_ACTUATE,
            ],
            [
                SpecRule::NAME => Attribute::XLINK_ARCROLE,
            ],
            [
                SpecRule::NAME => Attribute::XLINK_HREF,
                SpecRule::ALTERNATIVE_NAMES => [
                    Attribute::HREF,
                ],
                SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)data:image\/svg\+xml',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::DATA,
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_EMPTY => false,
                ],
            ],
            [
                SpecRule::NAME => Attribute::XLINK_ROLE,
            ],
            [
                SpecRule::NAME => Attribute::XLINK_SHOW,
            ],
            [
                SpecRule::NAME => Attribute::XLINK_TITLE,
            ],
            [
                SpecRule::NAME => Attribute::XLINK_TYPE,
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
