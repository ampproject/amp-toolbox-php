<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class NonceAttr extends AttributeList
{
    /** @var string */
    const ID = 'nonce-attr';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::NONCE => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
    ];
}
