<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidDeclarationName;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyDeclarationList;

class DeclarationListTest extends TestCase
{

    public function testDefaultValues()
    {
        $dummyDeclarationList = new DummyDeclarationList();

        $this->assertEquals('DUMMY', $dummyDeclarationList->getId());

        $this->assertTrue($dummyDeclarationList->has('position'));
        $this->assertFalse($dummyDeclarationList->has('utter nonsense'));

        $position = $dummyDeclarationList->get('position');

        $this->assertIsArray($position);
        $this->assertArrayHasKey('valueCasei', $position);
    }

    public function testByFormatThrowsExceptionForUnknownFormat()
    {
        $dummyDeclarationList = new DummyDeclarationList();

        $this->expectException(InvalidDeclarationName::class);
        $dummyDeclarationList->get('utter nonsense');
    }
}
