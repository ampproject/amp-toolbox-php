<?php

namespace AmpProject\Tests\ValidatorFixtures;

use AmpProject\Html\Attribute;
use AmpProject\Validator\Spec\DeclarationList;
use AmpProject\Validator\Spec\SpecRule;

/**
 * @property-read array $position
 */
class DummyDeclarationList extends DeclarationList
{
    /** @var string */
    const ID = 'DUMMY';

    /** @var array<array> */
    const DECLARATIONS = [
        Attribute::POSITION => [
            SpecRule::VALUE_CASEI => [
                'absolute',
                'inherit',
                'initial',
                'relative',
                'static',
            ],
        ],
    ];
}
