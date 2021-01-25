<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Textarea extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TEXTAREA,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'autocomplete',
            ],
            [
                SpecRule::NAME => 'autoexpand',
                SpecRule::REQUIRES_EXTENSION => [
                    'amp-form',
                ],
            ],
            [
                SpecRule::NAME => 'autofocus',
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => 'cols',
            ],
            [
                SpecRule::NAME => 'disabled',
            ],
            [
                SpecRule::NAME => 'maxlength',
            ],
            [
                SpecRule::NAME => 'minlength',
            ],
            [
                SpecRule::NAME => 'no-verify',
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => 'pattern',
            ],
            [
                SpecRule::NAME => 'placeholder',
            ],
            [
                SpecRule::NAME => 'readonly',
            ],
            [
                SpecRule::NAME => 'required',
            ],
            [
                SpecRule::NAME => 'rows',
            ],
            [
                SpecRule::NAME => 'selectiondirection',
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => 'selectionend',
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => 'selectionstart',
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => 'spellcheck',
            ],
            [
                SpecRule::NAME => 'wrap',
            ],
            [
                SpecRule::NAME => '[autocomplete]',
            ],
            [
                SpecRule::NAME => '[autofocus]',
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => '[cols]',
            ],
            [
                SpecRule::NAME => '[defaulttext]',
            ],
            [
                SpecRule::NAME => '[disabled]',
            ],
            [
                SpecRule::NAME => '[maxlength]',
            ],
            [
                SpecRule::NAME => '[minlength]',
            ],
            [
                SpecRule::NAME => '[pattern]',
            ],
            [
                SpecRule::NAME => '[placeholder]',
            ],
            [
                SpecRule::NAME => '[readonly]',
            ],
            [
                SpecRule::NAME => '[required]',
            ],
            [
                SpecRule::NAME => '[rows]',
            ],
            [
                SpecRule::NAME => '[selectiondirection]',
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => '[selectionend]',
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => '[selectionstart]',
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => '[spellcheck]',
            ],
            [
                SpecRule::NAME => '[wrap]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'name-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
