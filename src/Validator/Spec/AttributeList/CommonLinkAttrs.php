<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class CommonLinkAttrs extends AttributeList
{
    /** @var string */
    const ID = 'common-link-attrs';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::CHARSET => [
            SpecRule::VALUE_CASEI => [
                'utf-8',
            ],
        ],
        Attribute::COLOR => [],
        Attribute::CROSSORIGIN => [],
        Attribute::HREFLANG => [],
        Attribute::MEDIA => [],
        Attribute::SIZES => [],
        Attribute::TARGET => [],
        Attribute::TYPE => [],
    ];
}
