<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class TagRequiredByMissing extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'TAG_REQUIRED_BY_MISSING';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'The tag \'%1\' is missing or incorrect, but required by \'%2\'.',
        SpecRule::SPECIFICITY => 10,
    ];
}
