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

final class CiteAttr extends AttributeList
{
    /** @var string */
    const ID = 'cite-attr';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::CITE => [
            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
            SpecRule::VALUE_URL => [
                SpecRule::PROTOCOL => [
                    Protocol::HTTP,
                    Protocol::HTTPS,
                ],
                SpecRule::ALLOW_EMPTY => true,
            ],
        ],
    ];
}
