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

final class Optgroup extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::OPTGROUP,
        SpecRule::MANDATORY_PARENT => Element::SELECT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DISABLED,
            ],
            [
                SpecRule::NAME => Attribute::LABEL,
            ],
            [
                SpecRule::NAME => '[disabled]',
            ],
            [
                SpecRule::NAME => '[label]',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
