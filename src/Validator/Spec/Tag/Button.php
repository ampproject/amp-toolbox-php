<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Button extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'BUTTON';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::BUTTON,
        SpecRule::ATTRS => [
            Attribute::DISABLED => [
                SpecRule::VALUE => [
                    '',
                ],
            ],
            Attribute::ROLE => [
                SpecRule::IMPLICIT => true,
            ],
            Attribute::TABINDEX => [
                SpecRule::IMPLICIT => true,
            ],
            Attribute::TYPE => [],
            Attribute::VALUE => [],
            '[disabled]' => [],
            '[type]' => [
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            '[value]' => [],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\NameAttr::ID,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
