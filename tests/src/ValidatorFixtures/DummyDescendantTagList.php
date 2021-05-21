<?php

namespace AmpProject\Tests\ValidatorFixtures;

use AmpProject\Tag;
use AmpProject\Validator\Spec\DescendantTagList;

class DummyDescendantTagList extends DescendantTagList
{
    /** @var string */
    const ID = 'dummy';

    /** @var array<array> */
    const DESCENDANT_TAGS = [
        Tag::IMG,
    ];
}
