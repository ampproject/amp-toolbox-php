<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class InteractiveOptionsResultsCategoryAttrs extends AttributeList
{
    /** @var string */
    const ID = 'interactive-options-results-category-attrs';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::OPTION_1_RESULTS_CATEGORY => [
            SpecRule::TRIGGER => [
                SpecRule::ALSO_REQUIRES_ATTR => [
                    Attribute::OPTION_2_RESULTS_CATEGORY,
                ],
            ],
        ],
        Attribute::OPTION_2_RESULTS_CATEGORY => [
            SpecRule::TRIGGER => [
                SpecRule::ALSO_REQUIRES_ATTR => [
                    Attribute::OPTION_1_RESULTS_CATEGORY,
                ],
            ],
        ],
        Attribute::OPTION_3_RESULTS_CATEGORY => [
            SpecRule::TRIGGER => [
                SpecRule::ALSO_REQUIRES_ATTR => [
                    Attribute::OPTION_2_RESULTS_CATEGORY,
                    Attribute::OPTION_3_TEXT,
                ],
            ],
        ],
        Attribute::OPTION_4_RESULTS_CATEGORY => [
            SpecRule::TRIGGER => [
                SpecRule::ALSO_REQUIRES_ATTR => [
                    Attribute::OPTION_3_RESULTS_CATEGORY,
                    Attribute::OPTION_4_TEXT,
                ],
            ],
        ],
    ];
}
