<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class CssSyntaxNotASelectorStart extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'CSS_SYNTAX_NOT_A_SELECTOR_START';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - not a selector start.',
        SpecRule::SPECIFICITY => 66,
    ];
}
