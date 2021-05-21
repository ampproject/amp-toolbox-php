<?php

namespace AmpProject\Tests\ValidatorFixtures;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

class DummyError extends Error
{

    /** @var string */
    const CODE = 'dummy';

    /** @var array<array> */
    const SPEC = [
        SpecRule::FORMAT => 'this is an error',
    ];
}
