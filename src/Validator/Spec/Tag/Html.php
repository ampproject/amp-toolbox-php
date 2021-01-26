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

final class Html extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::HTML,
        SpecRule::MANDATORY => true,
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::_DOCTYPE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_AMP_AUTOCOMPLETE_OPT_IN,
                SpecRule::VALUE => [
                    'false',
                ],
                SpecRule::DISALLOWED_VALUE_REGEX => 'false',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
        SpecRule::DISABLED_BY => [
            Attribute::TRANSFORMED,
        ],
    ];
}
