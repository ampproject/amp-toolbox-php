<?php

namespace AmpProject\Tests\ValidatorFixtures;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

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
    ];
}
