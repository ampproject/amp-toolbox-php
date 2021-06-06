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

final class Symbol extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'SYMBOL';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::SYMBOL,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
            ],
            [
                SpecRule::NAME => Attribute::HEIGHT,
            ],
            [
                SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,
            ],
            [
                SpecRule::NAME => Attribute::VIEWBOX,
            ],
            [
                SpecRule::NAME => Attribute::WIDTH,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\SvgCoreAttributes::ID,
            AttributeList\SvgPresentationAttributes::ID,
            AttributeList\SvgStyleAttr::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}