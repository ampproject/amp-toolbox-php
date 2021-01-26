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

final class Th extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TH,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'abbr',
            ],
            [
                SpecRule::NAME => 'align',
            ],
            [
                SpecRule::NAME => 'bgcolor',
            ],
            [
                SpecRule::NAME => 'colspan',
            ],
            [
                SpecRule::NAME => 'headers',
            ],
            [
                SpecRule::NAME => 'height',
            ],
            [
                SpecRule::NAME => 'rowspan',
            ],
            [
                SpecRule::NAME => 'scope',
            ],
            [
                SpecRule::NAME => 'sorted',
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => 'valign',
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
