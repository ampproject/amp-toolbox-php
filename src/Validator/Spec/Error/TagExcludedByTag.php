<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class TagExcludedByTag extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'TAG_EXCLUDED_BY_TAG';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'The tag \'%1\' is present, but is excluded by the presence of \'%2\'.',
        SpecRule::SPECIFICITY => 11,
    ];
}