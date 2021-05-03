<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class SvgXlinkAttributes extends AttributeList
{
    /** @var string */
    const ID = 'svg-xlink-attributes';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::XLINK_ACTUATE => [],
        Attribute::XLINK_ARCROLE => [],
        Attribute::XLINK_HREF => [
            SpecRule::ALTERNATIVE_NAMES => [
                Attribute::HREF,
            ],
            SpecRule::VALUE_URL => [
                SpecRule::PROTOCOL => [
                    Protocol::HTTP,
                    Protocol::HTTPS,
                ],
                SpecRule::ALLOW_EMPTY => false,
            ],
        ],
        Attribute::XLINK_ROLE => [],
        Attribute::XLINK_SHOW => [],
        Attribute::XLINK_TITLE => [],
        Attribute::XLINK_TYPE => [],
    ];
}
