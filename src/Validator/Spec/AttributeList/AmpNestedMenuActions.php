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
            SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu-close\', \'amp-nested-submenu-open\']', // @todo Should this not be converted into an array?
        ],
        Attribute::AMP_NESTED_SUBMENU_OPEN => [
            SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu-close\', \'amp-nested-submenu-open\']', // @todo Ditto.
        ],
    ];
}
