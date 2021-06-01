<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class CssSyntaxInvalidAttrSelector extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'CSS_SYNTAX_INVALID_ATTR_SELECTOR';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - invalid attribute selector.',
        SpecRule::SPECIFICITY => 76,
    ];
}
