<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmpInputmaskCommonAttr extends AttributeList
{
    /** @var string */
    const ID = 'amp-inputmask-common-attr';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::MASK_OUTPUT => [
            SpecRule::TRIGGER => [
                SpecRule::ALSO_REQUIRES_ATTR => [
                    Attribute::MASK,
                ],
            ],
        ],
        Attribute::TYPE => [
            SpecRule::VALUE => [
                'text',
                'tel',
                'search',
            ],
        ],
        '[TYPE]' => [],
    ];
}
