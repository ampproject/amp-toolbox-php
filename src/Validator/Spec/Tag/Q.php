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

final class Q extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'Q';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::Q,
        SpecRule::ATTR_LISTS => [
            AttributeList\CiteAttr::ID,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}