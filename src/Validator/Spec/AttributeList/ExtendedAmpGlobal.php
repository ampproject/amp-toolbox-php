<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class ExtendedAmpGlobal extends AttributeList
{
    /** @var string */
    const ID = 'extended-amp-global';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::I_AMPHTML_LAYOUT => [
            SpecRule::VALUE_CASEI => [
                'container',
                'fill',
                'fixed',
                'fixed-height',
                'flex-item',
                'fluid',
                'intrinsic',
                'nodisplay',
                'responsive',
            ],
            SpecRule::ENABLED_BY => [
                Attribute::TRANSFORMED,
            ],
        ],
        Attribute::MEDIA => [],
        Attribute::NOLOADING => [
            SpecRule::VALUE => [
                '',
            ],
        ],
    ];
}
