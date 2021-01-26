<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Textarea extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TEXTAREA,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOCOMPLETE,
            ],
            [
                SpecRule::NAME => Attribute::AUTOEXPAND,
                SpecRule::REQUIRES_EXTENSION => [
                    Extension::FORM,
                ],
            ],
            [
                SpecRule::NAME => Attribute::AUTOFOCUS,
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => Attribute::COLS,
            ],
            [
                SpecRule::NAME => Attribute::DISABLED,
            ],
            [
                SpecRule::NAME => Attribute::MAXLENGTH,
            ],
            [
                SpecRule::NAME => Attribute::MINLENGTH,
            ],
            [
                SpecRule::NAME => Attribute::NO_VERIFY,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => Attribute::PATTERN,
            ],
            [
                SpecRule::NAME => Attribute::PLACEHOLDER,
            ],
            [
                SpecRule::NAME => Attribute::READONLY,
            ],
            [
                SpecRule::NAME => Attribute::REQUIRED,
            ],
            [
                SpecRule::NAME => Attribute::ROWS,
            ],
            [
                SpecRule::NAME => Attribute::SELECTIONDIRECTION,
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => Attribute::SELECTIONEND,
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => Attribute::SELECTIONSTART,
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => Attribute::SPELLCHECK,
            ],
            [
                SpecRule::NAME => Attribute::WRAP,
            ],
            [
                SpecRule::NAME => '[autocomplete]',
            ],
            [
                SpecRule::NAME => '[autofocus]',
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
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
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => '[selectionend]',
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => '[selectionstart]',
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
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
