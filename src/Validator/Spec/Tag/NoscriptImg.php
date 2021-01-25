<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class NoscriptImg extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::IMG,
        SpecRule::SPEC_NAME => 'noscript > img',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'alt',
            ],
            [
                SpecRule::NAME => 'attribution',
            ],
            [
                SpecRule::NAME => 'border',
            ],
            [
                SpecRule::NAME => 'decoding',
                SpecRule::VALUE => [
                    'async',
                    'auto',
                    'sync',
                ],
            ],
            [
                SpecRule::NAME => 'height',
            ],
            [
                SpecRule::NAME => 'importance',
            ],
            [
                SpecRule::NAME => 'ismap',
            ],
            [
                SpecRule::NAME => 'intrinsicsize',
            ],
            [
                SpecRule::NAME => 'loading',
            ],
            [
                SpecRule::NAME => 'longdesc',
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'http',
                        'https',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'sizes',
            ],
            [
                SpecRule::NAME => 'width',
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
