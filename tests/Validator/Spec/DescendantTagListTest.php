<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidDescendantTagName;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyDescendantTagList;

class DescendantTagListTest extends TestCase
{

    public function testDefaultValues()
    {
        $dummyDescendantTagList = new DummyDescendantTagList();

        $this->assertEquals('dummy', $dummyDescendantTagList->getId());

        $this->assertTrue($dummyDescendantTagList->has('img'));
        $this->assertFalse($dummyDescendantTagList->has('utter nonsense'));
    }
}
