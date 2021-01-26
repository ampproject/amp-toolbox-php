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
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpState extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STATE,
        SpecRule::SPEC_NAME => 'amp-state',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CREDENTIALS,
            ],
            [
                SpecRule::NAME => Attribute::OVERRIDABLE,
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => true,
                ],
            ],
            [
                SpecRule::NAME => '[src]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-id-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bind/',
        SpecRule::CHILD_TAGS => [
            SpecRule::FIRST_CHILD_TAG_NAME_ONEOF => [
                'SCRIPT',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::BIND,
        ],
    ];
}
