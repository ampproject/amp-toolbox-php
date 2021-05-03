<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class MandatorySrcAmp4email extends AttributeList
{
    /** @var string */
    const ID = 'mandatory-src-amp4email';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::SRC => [
            SpecRule::MANDATORY => true,
            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
            SpecRule::VALUE_URL => [
                SpecRule::PROTOCOL => [
                    Protocol::HTTPS,
                ],
                SpecRule::ALLOW_RELATIVE => false,
            ],
        ],
    ];
}
