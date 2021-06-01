<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class TemplateInAttrName extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'TEMPLATE_IN_ATTR_NAME';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'Mustache template syntax in attribute name \'%1\' in tag \'%2\'.',
        SpecRule::SPECIFICITY => 43,
    ];
}
