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
     * @covers \AmpProject\Validator\Spec\AttributeList::__get()
     */
    public function testGet()
    {
        $dummyAttributeList = new DummyAttributeList();

        $this->assertEquals('dummy', $dummyAttributeList->getId());
        $this->assertEquals('dummy', $dummyAttributeList->id);

        $this->assertTrue($dummyAttributeList->has('type'));
        $this->assertTrue($dummyAttributeList->has('[value]'));
        $this->assertFalse($dummyAttributeList->has('utter nonsense'));

        $this->assertIsArray($dummyAttributeList->get('type'));
        $this->assertIsArray($dummyAttributeList->type);
        $this->assertArrayHasKey('valueCasei', $dummyAttributeList->get('type'));
        $this->assertArrayHasKey('valueCasei', $dummyAttributeList->type);

        $this->assertEquals(123, $dummyAttributeList->get('[value]'));
        $this->assertEquals(123, $dummyAttributeList->value_binding);

        $this->assertEquals(567, $dummyAttributeList->get('attribute-with-dashes'));
        $this->assertEquals(567, $dummyAttributeList->attributeWithDashes);
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
