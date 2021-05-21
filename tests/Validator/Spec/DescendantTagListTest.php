<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyDescendantTagList;

class DescendantTagListTest extends TestCase
{

    /**
     * @covers \AmpProject\Validator\Spec\DescendantTagList::getId()
     * @covers \AmpProject\Validator\Spec\DescendantTagList::get()
     * @covers \AmpProject\Validator\Spec\DescendantTagList::has()
     */
    public function testDefaultValues()
    {
        $dummyDescendantTagList = new DummyDescendantTagList();

        $this->assertEquals('dummy', $dummyDescendantTagList->getId());

        $this->assertTrue($dummyDescendantTagList->has('img'));
        $this->assertFalse($dummyDescendantTagList->has('utter nonsense'));
    }
}
