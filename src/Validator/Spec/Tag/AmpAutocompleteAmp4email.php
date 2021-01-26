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

final class AmpAutocompleteAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::AUTOCOMPLETE,
        SpecRule::SPEC_NAME => 'AMP-AUTOCOMPLETE (AMP4EMAIL)',
        SpecRule::ATTRS => [
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
                SpecRule::NAME => Attribute::SUBMIT_ON_ENTER,
            ],
            [
                SpecRule::NAME => Attribute::SUGGEST_FIRST,
            ],
            [
                SpecRule::NAME => Attribute::SRC,
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
                SpecRule::NAME => Attribute::TEMPLATE,
                SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
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
            Extension::AUTOCOMPLETE,
        ],
    ];
}
