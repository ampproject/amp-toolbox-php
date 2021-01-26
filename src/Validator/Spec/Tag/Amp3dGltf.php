<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Amp3dGltf extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::_3D_GLTF,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALPHA,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::ANTIALIASING,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::AUTOROTATE,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::CLEARCOLOR,
            ],
            [
                SpecRule::NAME => Attribute::ENABLEZOOM,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::MAXPIXELRATIO,
                SpecRule::VALUE_REGEX => '[+-]?(\d*\.)?\d+',
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::_3D_GLTF,
        ],
    ];
}
