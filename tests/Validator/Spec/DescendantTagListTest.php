<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyDescendantTagList;

class DescendantTagListTest extends TestCase
{

    /**
     * @covers \AmpProject\Validator\Spec\DescendantTagList::getId()
     * @covers \AmpProject\Validator\Spec\DescendantTagList::has()
     * @covers \AmpProject\Validator\Spec\DescendantTagList::__get()
     */
    public function testGet()
    {
        $dummyDescendantTagList = new DummyDescendantTagList();

        $this->assertEquals('dummy', $dummyDescendantTagList->getId());
        $this->assertEquals('dummy', $dummyDescendantTagList->id);

        $this->assertTrue($dummyDescendantTagList->has('img'));
        $this->assertFalse($dummyDescendantTagList->has('utter nonsense'));
    }
}
