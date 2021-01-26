<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Time extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TIME,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'datetime',
            ],
            [
                SpecRule::NAME => 'pubdate',
                SpecRule::VALUE => [
                    '',
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
