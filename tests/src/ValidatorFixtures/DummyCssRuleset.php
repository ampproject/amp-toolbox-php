<?php

namespace AmpProject\Tests\ValidatorFixtures;

use AmpProject\Validator\Spec\CssRuleset;
use AmpProject\Validator\Spec\SpecRule;

/**
 * @property-read int $maxBytes
 */
class DummyCssRuleset extends CssRuleset
{

    /** @var string */
    const ID = 'dummy';

    /** @var array<array> */
    const SPEC = [
        SpecRule::MAX_BYTES => 42,
    ];
}
