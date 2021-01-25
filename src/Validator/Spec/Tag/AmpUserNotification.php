<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpUserNotification extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::USER_NOTIFICATION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-dismiss-href',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'https',
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                    SpecRule::ALLOW_EMPTY => false,
                ],
            ],
            [
                SpecRule::NAME => 'data-show-if-href',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'https',
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                    SpecRule::ALLOW_EMPTY => false,
                ],
            ],
            [
                SpecRule::NAME => 'enctype',
                SpecRule::VALUE => [
                    'application/x-www-form-urlencoded',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-user-notification',
        ],
    ];
}
