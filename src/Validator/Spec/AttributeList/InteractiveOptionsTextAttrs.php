<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class InteractiveOptionsTextAttrs extends AttributeList
{
    /** @var string */
    const ID = 'interactive-options-text-attrs';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::OPTION_1_TEXT => [
            SpecRule::MANDATORY => true,
        ],
        Attribute::OPTION_2_TEXT => [
            SpecRule::MANDATORY => true,
        ],
        Attribute::OPTION_3_TEXT => [],
        Attribute::OPTION_4_TEXT => [
            SpecRule::TRIGGER => [
                SpecRule::ALSO_REQUIRES_ATTR => [
                    Attribute::OPTION_3_TEXT,
                ],
            ],
        ],
    ];
}
