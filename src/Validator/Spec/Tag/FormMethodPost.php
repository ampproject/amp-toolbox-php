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

final class FormMethodPost extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::FORM,
        SpecRule::SPEC_NAME => 'FORM [method=POST]',
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
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
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
                SpecRule::NAME => Attribute::TARGET,
                SpecRule::VALUE_CASEI => [
                    '_blank',
                    '_top',
                ],
            ],
            [
                SpecRule::NAME => Attribute::VERIFY_XHR,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'form-name-attr',
        ],
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-APP-BANNER',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::FORM,
        ],
    ];
}
