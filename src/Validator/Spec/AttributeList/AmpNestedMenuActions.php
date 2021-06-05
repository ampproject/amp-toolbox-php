<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmpNestedMenuActions extends AttributeList
{
    /**
     * ID of the attribute list.
     *
     * @var string
     */
    const ID = 'amp-nested-menu-actions';

    /**
     * Array of attributes.
     *
     * @var array<array>
     */
    const ATTRIBUTES = [
        Attribute::AMP_NESTED_SUBMENU_CLOSE => [
            SpecRule::MANDATORY_ONEOF => [
                Attribute::AMP_NESTED_SUBMENU_CLOSE,
                Attribute::AMP_NESTED_SUBMENU_OPEN,
            ],
        ],
        Attribute::AMP_NESTED_SUBMENU_OPEN => [
            SpecRule::MANDATORY_ONEOF => [
                Attribute::AMP_NESTED_SUBMENU_CLOSE,
                Attribute::AMP_NESTED_SUBMENU_OPEN,
            ],
        ],
    ];
}
