<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class NoscriptImg extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::IMG,
        SpecRule::SPEC_NAME => 'noscript > img',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALT,
            ],
            [
                SpecRule::NAME => Attribute::ATTRIBUTION,
            ],
            [
                SpecRule::NAME => Attribute::BORDER,
            ],
            [
                SpecRule::NAME => Attribute::DECODING,
                SpecRule::VALUE => [
                    'async',
                    'auto',
                    'sync',
                ],
            ],
            [
                SpecRule::NAME => Attribute::HEIGHT,
            ],
            [
                SpecRule::NAME => Attribute::IMPORTANCE,
            ],
            [
                SpecRule::NAME => Attribute::ISMAP,
            ],
            [
                SpecRule::NAME => Attribute::INTRINSICSIZE,
            ],
            [
                SpecRule::NAME => Attribute::LOADING,
            ],
            [
                SpecRule::NAME => Attribute::LONGDESC,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::SIZES,
            ],
            [
                SpecRule::NAME => Attribute::WIDTH,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-src-or-srcset',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
        SpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,
        SpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::IMG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'img',
    ];
}
