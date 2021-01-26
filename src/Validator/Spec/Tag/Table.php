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

final class Table extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TABLE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'align',
            ],
            [
                SpecRule::NAME => 'bgcolor',
            ],
            [
                SpecRule::NAME => 'border',
                SpecRule::VALUE => [
                    '0',
                    '1',
                ],
            ],
            [
                SpecRule::NAME => 'cellpadding',
            ],
            [
                SpecRule::NAME => 'cellspacing',
            ],
            [
                SpecRule::NAME => 'sortable',
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => 'width',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
