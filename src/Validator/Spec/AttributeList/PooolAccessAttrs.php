<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class PooolAccessAttrs extends AttributeList
{
    /**
     * ID of the attribute list.
     *
     * @var string
     */
    const ID = 'poool-access-attrs';

    /**
     * Array of attributes.
     *
     * @var array<array>
     */
    const ATTRIBUTES = [
        Attribute::POOOL_ACCESS_PREVIEW => [
            SpecRule::REQUIRES_EXTENSION => [
                Extension::ACCESS_POOOL,
            ],
        ],
        Attribute::POOOL_ACCESS_CONTENT => [
            SpecRule::REQUIRES_EXTENSION => [
                Extension::ACCESS_POOOL,
            ],
        ],
    ];
}
