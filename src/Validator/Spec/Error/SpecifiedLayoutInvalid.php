<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class SpecifiedLayoutInvalid extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'SPECIFIED_LAYOUT_INVALID';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'The specified layout \'%1\' is not supported by tag \'%2\'.',
        SpecRule::SPECIFICITY => 47,
    ];
}
