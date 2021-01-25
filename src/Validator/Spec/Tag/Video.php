<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Video extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::VIDEO,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'autoplay',
            ],
            [
                SpecRule::NAME => 'controls',
            ],
            [
                SpecRule::NAME => 'height',
            ],
            [
                SpecRule::NAME => 'loop',
            ],
            [
                SpecRule::NAME => 'muted',
                SpecRule::DEPRECATION => 'autoplay',
                SpecRule::DEPRECATION_URL => 'https://amp.dev/documentation/components/amp-video/',
            ],
            [
                SpecRule::NAME => 'playsinline',
            ],
            [
                SpecRule::NAME => 'poster',
            ],
            [
                SpecRule::NAME => 'preload',
            ],
            [
                SpecRule::NAME => 'src',
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'data',
                        'https',
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => 'width',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',
        SpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,
        SpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::VIDEO,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
