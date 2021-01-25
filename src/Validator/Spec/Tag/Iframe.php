<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Iframe extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::IFRAME,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'frameborder',
                SpecRule::VALUE => [
                    '0',
                    '1',
                ],
            ],
            [
                SpecRule::NAME => 'height',
            ],
            [
                SpecRule::NAME => 'referrerpolicy',
            ],
            [
                SpecRule::NAME => 'resizable',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'sandbox',
            ],
            [
                SpecRule::NAME => 'scrolling',
                SpecRule::VALUE => [
                    'auto',
                    'yes',
                    'no',
                ],
            ],
            [
                SpecRule::NAME => 'src',
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'data',
                        'https',
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => 'srcdoc',
                SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
            ],
            [
                SpecRule::NAME => 'width',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'name-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-iframe/',
        SpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,
        SpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::IFRAME,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
