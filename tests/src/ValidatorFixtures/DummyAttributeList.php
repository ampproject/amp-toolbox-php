<?php

namespace AmpProject\Tests\ValidatorFixtures;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

/**
 * @property-read array $type
 * @property-read int $value_binding
 * @property-read int $attributeWithDashes
 */
class DummyAttributeList extends AttributeList
{

    /** @var string */
    const ID = 'dummy';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::TYPE => [
            SpecRule::VALUE_CASEI => [
                'text/javascript',
            ],
        ],
        '[value]' => 123,
        'attribute-with-dashes' => 567,
    ];
}
