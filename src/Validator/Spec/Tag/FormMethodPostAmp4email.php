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

final class FormMethodPostAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::FORM,
        SpecRule::SPEC_NAME => 'FORM [method=POST] (AMP4EMAIL)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ACCEPT,
            ],
            [
                SpecRule::NAME => Attribute::ACCEPT_CHARSET,
            ],
            [
                SpecRule::NAME => Attribute::ACTION_XHR,
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => Attribute::AUTOCOMPLETE,
            ],
            [
                SpecRule::NAME => Attribute::CUSTOM_VALIDATION_REPORTING,
                SpecRule::VALUE => [
                    'as-you-go',
                    'interact-and-submit',
                    'show-all-on-submit',
                    'show-first-on-submit',
                ],
            ],
            [
                SpecRule::NAME => Attribute::ENCTYPE,
            ],
            [
                SpecRule::NAME => Attribute::METHOD,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'post',
                ],
            ],
            [
                SpecRule::NAME => Attribute::NOVALIDATE,
            ],
            [
                SpecRule::NAME => Attribute::XSSI_PREFIX,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::FORM,
        ],
    ];
}
