<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class FormMethodGetAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::FORM,
        SpecRule::SPEC_NAME => 'FORM [method=GET] (AMP4EMAIL)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'accept',
            ],
            [
                SpecRule::NAME => 'accept-charset',
            ],
            [
                SpecRule::NAME => 'action-xhr',
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => 'autocomplete',
            ],
            [
                SpecRule::NAME => 'custom-validation-reporting',
                SpecRule::VALUE => [
                    'as-you-go',
                    'interact-and-submit',
                    'show-all-on-submit',
                    'show-first-on-submit',
                ],
            ],
            [
                SpecRule::NAME => 'enctype',
            ],
            [
                SpecRule::NAME => 'method',
                SpecRule::VALUE_CASEI => [
                    'get',
                ],
            ],
            [
                SpecRule::NAME => 'novalidate',
            ],
            [
                SpecRule::NAME => 'xssi-prefix',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-form',
        ],
    ];
}
