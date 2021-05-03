<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class SvgStyleAttr extends AttributeList
{
    /** @var string */
    const ID = 'svg-style-attr';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::STYLE => [
            SpecRule::VALUE_DOC_SVG_CSS => true,
        ],
    ];
}
