<?php

namespace AmpProject\Tests\ValidatorFixtures;

use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

class DummyTag extends Tag
{

    /** @var string */
    const ID = 'dummy';

    /** @var array<array> */
    const SPEC = [
        SpecRule::TAG_NAME => Element::A,
    ];
}
