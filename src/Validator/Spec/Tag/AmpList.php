<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpList extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::LIST_,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'auto-resize',
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DEPRECATION => 'replacement-to-be-determined-at-a-later-date',
                SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/18849',
            ],
            [
                SpecRule::NAME => 'binding',
                SpecRule::VALUE => [
                    'always',
                    'no',
                    'refresh',
                ],
            ],
            [
                SpecRule::NAME => 'credentials',
            ],
            [
                SpecRule::NAME => 'data-amp-bind-src',
                SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\',\'data-amp-bind-src\']',
            ],
            [
                SpecRule::NAME => 'diffable',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'items',
            ],
            [
                SpecRule::NAME => 'load-more',
                SpecRule::VALUE => [
                    'auto',
                    'manual',
                ],
            ],
            [
                SpecRule::NAME => 'load-more-bookmark',
                SpecRule::TRIGGER => [
                    'alsoRequiresAttr' => [
                        'load-more',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'max-items',
            ],
            [
                SpecRule::NAME => 'reset-on-refresh',
                SpecRule::VALUE => [
                    '',
                    'always',
                    'fetch',
                ],
            ],
            [
                SpecRule::NAME => 'single-item',
            ],
            [
                SpecRule::NAME => 'src',
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'https',
                        'amp-state',
                        'amp-script',
                    ],
                    SpecRule::ALLOW_RELATIVE => true,
                ],
                SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\',\'data-amp-bind-src\']',
            ],
            [
                SpecRule::NAME => 'template',
                SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
            ],
            [
                SpecRule::NAME => 'xssi-prefix',
            ],
            [
                SpecRule::NAME => '[is-layout-container]',
            ],
            [
                SpecRule::NAME => '[src]',
                SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\',\'data-amp-bind-src\']',
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
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-list',
        ],
    ];
}
