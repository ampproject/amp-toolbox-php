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

final class Slot extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'SLOT';

    const SPEC = [
        SpecRule::TAG_NAME => Element::SLOT,
        SpecRule::ATTR_LISTS => [
            AttributeList\NameAttr::ID,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
