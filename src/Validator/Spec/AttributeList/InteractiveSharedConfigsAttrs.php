<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class InteractiveSharedConfigsAttrs extends AttributeList
{
    /** @var string */
    const ID = 'interactive-shared-configs-attrs';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::ID => [
            SpecRule::MANDATORY => true,
        ],
        Attribute::PROMPT_TEXT => [],
        Attribute::ENDPOINT => [
            SpecRule::MANDATORY => true,
            SpecRule::VALUE_URL => [
                SpecRule::PROTOCOL => [
                    Protocol::HTTPS,
                ],
                SpecRule::ALLOW_RELATIVE => false,
                SpecRule::ALLOW_EMPTY => false,
            ],
        ],
        Attribute::THEME => [
            SpecRule::VALUE => [
                'light',
                'dark',
            ],
        ],
        Attribute::CHIP_STYLE => [
            SpecRule::VALUE => [
                'shadow',
                'flat',
                'transparent',
            ],
        ],
        Attribute::PROMPT_SIZE => [
            SpecRule::VALUE => [
                'small',
                'medium',
                'large',
            ],
        ],
    ];
}
