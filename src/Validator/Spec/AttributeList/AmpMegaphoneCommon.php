<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmpMegaphoneCommon extends AttributeList
{
    /**
     * ID of the attribute list.
     *
     * @var string
     */
    const ID = 'amp-megaphone-common';

    /**
     * Array of attributes.
     *
     * @var array<array>
     */
    const ATTRIBUTES = [
        Attribute::DATA_LIGHT => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::DATA_SHARING => [
            SpecRule::VALUE => [
                '',
            ],
        ],
    ];
}
