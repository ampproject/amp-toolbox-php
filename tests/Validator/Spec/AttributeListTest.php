<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidAttributeName;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyAttributeList;

class AttributeListTest extends TestCase
{

    /**
     * @covers \AmpProject\Validator\Spec\AttributeList::getId()
     * @covers \AmpProject\Validator\Spec\AttributeList::get()
     * @covers \AmpProject\Validator\Spec\AttributeList::has()
     */
    public function testGet()
    {
        $dummyAttributeList = new DummyAttributeList();

        $this->assertEquals('dummy', $dummyAttributeList->getId());

        $this->assertTrue($dummyAttributeList->has('type'));
        $this->assertFalse($dummyAttributeList->has('utter nonsense'));

        $type = $dummyAttributeList->get('type');

        $this->assertIsArray($type);
        $this->assertArrayHasKey('valueCasei', $type);
    }

    /**
     * @covers \AmpProject\Validator\Spec\AttributeList::get()
     * @covers \AmpProject\Exception\InvalidAttributeName::forAttribute()
     */
    public function testThrowsExceptionForUnknownAttributeList()
    {
        $dummyAttributeList = new DummyAttributeList();

        $this->expectException(InvalidAttributeName::class);
        $this->expectExceptionMessage("Invalid attribute 'utter nonsense' was requested from the validator spec.");
        $dummyAttributeList->get('utter nonsense');
    }
}
