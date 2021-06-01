<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class CssSyntaxDisallowedKeyframeInsideKeyframe extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'CSS_SYNTAX_DISALLOWED_KEYFRAME_INSIDE_KEYFRAME';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - keyframe inside keyframe is not allowed.',
        SpecRule::SPECIFICITY => 115,
    ];
}
