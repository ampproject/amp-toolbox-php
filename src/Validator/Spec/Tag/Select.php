<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Select extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SELECT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOFOCUS,
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => Attribute::DISABLED,
            ],
            [
                SpecRule::NAME => Attribute::MULTIPLE,
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
                SpecRule::NAME => Attribute::REQUIRED,
            ],
            [
                SpecRule::NAME => Attribute::SIZE,
            ],
            [
                SpecRule::NAME => '[autofocus]',
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => '[disabled]',
            ],
            [
                SpecRule::NAME => '[multiple]',
            ],
            [
                SpecRule::NAME => '[required]',
            ],
            [
                SpecRule::NAME => '[size]',
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
