<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidDeclarationName;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyDeclarationList;

class DeclarationListTest extends TestCase
{
    /**
     * @covers \AmpProject\Validator\Spec\DeclarationList::getId()
     * @covers \AmpProject\Validator\Spec\DeclarationList::get()
     * @covers \AmpProject\Validator\Spec\DeclarationList::has()
     * @covers \AmpProject\Validator\Spec\DeclarationList::__get()
     */
    public function testGet()
    {
        $dummyDeclarationList = new DummyDeclarationList();

        $this->assertEquals('DUMMY', $dummyDeclarationList->getId());
        $this->assertEquals('DUMMY', $dummyDeclarationList->id);

        $this->assertTrue($dummyDeclarationList->has('position'));
        $this->assertFalse($dummyDeclarationList->has('utter nonsense'));

        $this->assertIsArray($dummyDeclarationList->get('position'));
        $this->assertIsArray($dummyDeclarationList->position);
        $this->assertArrayHasKey('valueCasei', $dummyDeclarationList->get('position'));
        $this->assertArrayHasKey('valueCasei', $dummyDeclarationList->position);
    }

    /**
     * @covers \AmpProject\Validator\Spec\DeclarationList::get()
     * @covers \AmpProject\Exception\InvalidDeclarationName::forDeclaration()
     */
    public function testThrowsExceptionForUnknownDeclarationList()
    {
        $dummyDeclarationList = new DummyDeclarationList();

        $this->expectException(InvalidDeclarationName::class);
        $this->expectExceptionMessage("Invalid declaration 'utter nonsense' was requested from the validator spec.");
        $dummyDeclarationList->get('utter nonsense');
    }
}
