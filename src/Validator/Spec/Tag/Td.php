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

final class Td extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'TD';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::TD,
        SpecRule::ATTRS => [
            Attribute::ALIGN => [],
            Attribute::BGCOLOR => [],
            Attribute::COLSPAN => [],
            Attribute::HEADERS => [],
            Attribute::HEIGHT => [],
            Attribute::ROWSPAN => [],
            Attribute::VALIGN => [],
            Attribute::WIDTH => [],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
