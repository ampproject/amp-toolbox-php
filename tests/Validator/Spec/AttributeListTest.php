<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidAttributeName;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyAttributeList;

class AttributeListTest extends TestCase
{

    public function testDefaultValues()
    {
        $dummyAttributeList = new DummyAttributeList();

        $this->assertEquals('dummy', $dummyAttributeList->getId());

        $this->assertTrue($dummyAttributeList->has('type'));
        $this->assertFalse($dummyAttributeList->has('utter nonsense'));

        $type = $dummyAttributeList->get('type');

        $this->assertIsArray($type);
        $this->assertArrayHasKey('valueCasei', $type);
    }

    public function testByFormatThrowsExceptionForUnknownFormat()
    {
        $dummyAttributeList = new DummyAttributeList();

        $this->expectException(InvalidAttributeName::class);
        $dummyAttributeList->get('utter nonsense');
    }
}
