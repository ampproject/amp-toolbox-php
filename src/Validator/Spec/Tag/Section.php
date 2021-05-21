<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Section extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'SECTION';

    const SPEC = [
        SpecRule::TAG_NAME => Element::SECTION,
        SpecRule::ATTR_LISTS => [
            AttributeList\PooolAccessAttrs::ID,
        ],
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-ACCORDION',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
