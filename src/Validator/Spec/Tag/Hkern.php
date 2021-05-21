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

final class Hkern extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'HKERN';

    const SPEC = [
        SpecRule::TAG_NAME => Element::HKERN,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::G1,
            ],
            [
                SpecRule::NAME => Attribute::G2,
            ],
            [
                SpecRule::NAME => Attribute::K,
            ],
            [
                SpecRule::NAME => Attribute::U1,
            ],
            [
                SpecRule::NAME => Attribute::U2,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\SvgCoreAttributes::ID,
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
