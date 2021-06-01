<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class DuplicateUniqueTagWarning extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'DUPLICATE_UNIQUE_TAG_WARNING';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'The tag \'%1\' appears more than once in the document. This will soon be an error.',
        SpecRule::SPECIFICITY => 31,
    ];
}
