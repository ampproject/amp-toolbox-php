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

final class Image extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::IMAGE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'externalresourcesrequired',
            ],
            [
                SpecRule::NAME => 'height',
            ],
            [
                SpecRule::NAME => 'preserveaspectratio',
            ],
            [
                SpecRule::NAME => 'transform',
            ],
            [
                SpecRule::NAME => 'width',
            ],
            [
                SpecRule::NAME => 'x',
            ],
            [
                SpecRule::NAME => 'xlink:actuate',
            ],
            [
                SpecRule::NAME => 'xlink:arcrole',
            ],
            [
                SpecRule::NAME => 'xlink:href',
                SpecRule::ALTERNATIVE_NAMES => [
                    'href',
                ],
                SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)data:image\/svg\+xml',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'data',
                        'http',
                        'https',
                    ],
                    SpecRule::ALLOW_EMPTY => false,
                ],
            ],
            [
                SpecRule::NAME => 'xlink:role',
            ],
            [
                SpecRule::NAME => 'xlink:show',
            ],
            [
                SpecRule::NAME => 'xlink:title',
            ],
            [
                SpecRule::NAME => 'xlink:type',
            ],
            [
                SpecRule::NAME => 'y',
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
