<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmphtmlNomoduleEngineAttrs extends AttributeList
{
    /** @var string */
    const ID = 'amphtml-nomodule-engine-attrs';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::ASYNC => [
            SpecRule::MANDATORY => true,
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::CROSSORIGIN => [
            SpecRule::VALUE => [
                'anonymous',
            ],
        ],
        Attribute::NOMODULE => [
            SpecRule::MANDATORY => true,
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::TYPE => [
            SpecRule::VALUE_CASEI => [
                'text/javascript',
            ],
        ],
    ];
}
