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

final class AmpAutocomplete extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::AUTOCOMPLETE,
        SpecRule::SPEC_NAME => 'amp-autocomplete',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::FILTER,
                SpecRule::MANDATORY => true,
                SpecRule::TRIGGER => [
                    SpecRule::IF_VALUE_REGEX => 'custom',
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::FILTER_EXPR,
                    ],
                ],
                SpecRule::VALUE_CASEI => [
                    'custom',
                    'fuzzy',
                    'none',
                    'prefix',
                    'substring',
                    'token-prefix',
                ],
            ],
            [
                SpecRule::NAME => Attribute::FILTER_EXPR,
                SpecRule::REQUIRES_EXTENSION => [
                    Extension::BIND,
                ],
            ],
            [
                SpecRule::NAME => Attribute::FILTER_VALUE,
            ],
            [
                SpecRule::NAME => Attribute::HIGHLIGHT_USER_ENTRY,
            ],
            [
                SpecRule::NAME => Attribute::INLINE,
            ],
            [
                SpecRule::NAME => Attribute::ITEMS,
            ],
            [
                SpecRule::NAME => Attribute::MAX_ENTRIES,
            ],
            [
                SpecRule::NAME => Attribute::MAX_ITEMS,
            ],
            [
                SpecRule::NAME => Attribute::MIN_CHARACTERS,
            ],
            [
                SpecRule::NAME => Attribute::PREFETCH,
            ],
            [
                SpecRule::NAME => Attribute::QUERY,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::SRC,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => true,
                ],
            ],
            [
                SpecRule::NAME => Attribute::SUBMIT_ON_ENTER,
            ],
            [
                SpecRule::NAME => Attribute::SUGGEST_FIRST,
            ],
            [
                SpecRule::NAME => Attribute::TEMPLATE,
            ],
            [
                SpecRule::NAME => '[src]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-autocomplete/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::CONTAINER,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::AUTOCOMPLETE,
        ],
    ];
}
