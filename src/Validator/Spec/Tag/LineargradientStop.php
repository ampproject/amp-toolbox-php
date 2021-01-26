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

final class LineargradientStop extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::STOP,
        SpecRule::SPEC_NAME => 'lineargradient > stop',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::OFFSET,
            ],
            [
                SpecRule::NAME => Attribute::STOP_COLOR,
            ],
            [
                SpecRule::NAME => Attribute::STOP_OPACITY,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'svg-style-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::LINEARGRADIENT,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
