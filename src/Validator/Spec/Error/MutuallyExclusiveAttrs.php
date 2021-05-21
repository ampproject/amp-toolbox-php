<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class MutuallyExclusiveAttrs extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'MUTUALLY_EXCLUSIVE_ATTRS';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'Mutually exclusive attributes encountered in tag \'%1\' - pick one of %2.',
        SpecRule::SPECIFICITY => 40,
    ];
}
