<?php

namespace AmpProject\Tests\ValidatorFixtures;

use AmpProject\Validator\Spec\DocRuleset;
use AmpProject\Validator\Spec\SpecRule;

/**
 * @property-read int maxBytes
 */
class DummyDocRuleset extends DocRuleset
{
    /** @var string */
    const ID = 'DUMMY';

    /** @var array<array> */
    const SPEC = [
        SpecRule::MAX_BYTES => 123,
    ];
}
