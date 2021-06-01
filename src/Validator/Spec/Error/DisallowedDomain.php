<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class DisallowedDomain extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'DISALLOWED_DOMAIN';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'The domain \'%3\' for attribute \'%1\' in tag \'%2\' is disallowed.',
        SpecRule::SPECIFICITY => 53,
    ];
}
