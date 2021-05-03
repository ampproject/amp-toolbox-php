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

final class MandatorySrcOrSrcset extends AttributeList
{
    /** @var string */
    const ID = 'mandatory-src-or-srcset';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::SRC => [
            SpecRule::ALTERNATIVE_NAMES => [
                Attribute::SRCSET,
            ],
            SpecRule::MANDATORY => true,
            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
            SpecRule::VALUE_URL => [
                SpecRule::PROTOCOL => [
                    Protocol::DATA,
                    Protocol::HTTP,
                    Protocol::HTTPS,
                ],
            ],
        ],
    ];
}
