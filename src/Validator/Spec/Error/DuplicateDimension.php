<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class DuplicateDimension extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'DUPLICATE_DIMENSION';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'Multiple image candidates with the same width or pixel density found in attribute \'%1\' in tag \'%2\'.',
        SpecRule::SPECIFICITY => 50,
    ];
}
