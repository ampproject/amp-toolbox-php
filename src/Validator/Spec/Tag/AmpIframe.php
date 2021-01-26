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

final class AmpIframe extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::IFRAME,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'allow',
            ],
            [
                SpecRule::NAME => 'allowfullscreen',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'allowpaymentrequest',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'allowtransparency',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'frameborder',
                SpecRule::VALUE => [
                    '0',
                    '1',
                ],
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
                    'no',
                    'yes',
                ],
            ],
            [
                SpecRule::NAME => 'tabindex',
                SpecRule::VALUE_REGEX => '-?\d+',
            ],
            [
                SpecRule::NAME => 'src',
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
                SpecRule::NAME => 'srcdoc',
                SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
            ],
            [
                SpecRule::NAME => '[src]',
                SpecRule::TRIGGER => [
                    'alsoRequiresAttr' => [
                        'src',
                    ],
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
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
