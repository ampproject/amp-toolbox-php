<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpAutocompleteAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::AUTOCOMPLETE,
        SpecRule::SPEC_NAME => 'AMP-AUTOCOMPLETE (AMP4EMAIL)',
        SpecRule::ATTRS => [
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
                SpecRule::NAME => 'submit-on-enter',
            ],
            [
                SpecRule::NAME => 'suggest-first',
            ],
            [
                SpecRule::NAME => 'src',
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'https',
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => 'template',
                SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::CONTAINER,
            ],
        ],
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-AUTOCOMPLETE',
            'AMP-STATE',
            'TEMPLATE',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-autocomplete',
        ],
    ];
}
