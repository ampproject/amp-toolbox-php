<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmpDatePickerRangeTypeAttributes extends AttributeList
{
    /**
     * ID of the attribute list.
     *
     * @var string
     */
    const ID = 'amp-date-picker-range-type-attributes';

    /**
     * Array of attributes.
     *
     * @var array<array>
     */
    const ATTRIBUTES = [
        Attribute::END_DATE => [],
        Attribute::END_INPUT_SELECTOR => [],
        Attribute::MAXIMUM_NIGHTS => [
            SpecRule::VALUE_REGEX => '[0-9]+',
        ],
        Attribute::MINIMUM_NIGHTS => [
            SpecRule::VALUE_REGEX => '[0-9]+',
        ],
        Attribute::START_DATE => [],
        Attribute::START_INPUT_SELECTOR => [],
    ];
}
