<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

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
                SpecRule::NAME => 'filter',
                SpecRule::MANDATORY => true,
                SpecRule::TRIGGER => [
                    'ifValueRegex' => 'custom',
                    'alsoRequiresAttr' => [
                        'filter-expr',
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
                SpecRule::NAME => 'filter-expr',
                SpecRule::REQUIRES_EXTENSION => [
                    Extension::BIND,
                ],
            ],
            [
                SpecRule::NAME => 'filter-value',
            ],
            [
                SpecRule::NAME => 'highlight-user-entry',
            ],
            [
                SpecRule::NAME => 'inline',
            ],
            [
                SpecRule::NAME => 'items',
            ],
            [
                SpecRule::NAME => 'max-entries',
            ],
            [
                SpecRule::NAME => 'max-items',
            ],
            [
                SpecRule::NAME => 'min-characters',
            ],
            [
                SpecRule::NAME => 'prefetch',
            ],
            [
                SpecRule::NAME => 'query',
                SpecRule::TRIGGER => [
                    'alsoRequiresAttr' => [
                        'src',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'src',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => true,
                ],
            ],
            [
                SpecRule::NAME => 'submit-on-enter',
            ],
            [
                SpecRule::NAME => 'suggest-first',
            ],
            [
                SpecRule::NAME => 'template',
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
