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

final class AmpIframe extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::IFRAME,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALLOW,
            ],
            [
                SpecRule::NAME => Attribute::ALLOWFULLSCREEN,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::ALLOWPAYMENTREQUEST,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::ALLOWTRANSPARENCY,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::FRAMEBORDER,
                SpecRule::VALUE => [
                    '0',
                    '1',
                ],
            ],
            [
                SpecRule::NAME => Attribute::REFERRERPOLICY,
            ],
            [
                SpecRule::NAME => Attribute::RESIZABLE,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SANDBOX,
            ],
            [
                SpecRule::NAME => Attribute::SCROLLING,
                SpecRule::VALUE => [
                    'auto',
                    'no',
                    'yes',
                ],
            ],
            [
                SpecRule::NAME => Attribute::TABINDEX,
                SpecRule::VALUE_REGEX => '-?\d+',
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::DATA,
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => true,
                ],
            ],
            [
                SpecRule::NAME => Attribute::SRCDOC,
                SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
            ],
            [
                SpecRule::NAME => '[src]',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::SRC,
                    ],
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::IFRAME,
        ],
    ];
}
