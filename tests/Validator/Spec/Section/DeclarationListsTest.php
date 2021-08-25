<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidListName;
use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec;

/**
 * Tests for AmpProject\Validator\Spec\Section\DeclarationLists.
 *
 * @covers  \AmpProject\Validator\Spec\Section\DeclarationLists
 * @package ampproject/amp-toolbox
 */
class DeclarationListsTest extends TestCase
{
    /** @var DeclarationLists */
    private $declarationLists;

    /**
     * Sets up the fixture, for example, open a network connection.
     *
     * This method is called before each test.
     *
     * @return void
     */
    protected function set_up()
    {
        parent::set_up();
        $spec                   = new Spec();
        $this->declarationLists = $spec->declarationLists();
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\DeclarationLists::get()
     */
    public function testGetByDeclarationListName()
    {
        $declarationList = $this->declarationLists->get('BASIC_DECLARATIONS');

        $this->assertInstanceOf(Spec\DeclarationList::class, $declarationList);
        $this->assertInstanceOf(Spec\DeclarationList\BasicDeclarations::class, $declarationList);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\DeclarationLists::get()
     * @covers \AmpProject\Exception\InvalidListName::forDeclarationList()
     */
    public function testGetThrowsExceptionForUnknownDeclarationListName()
    {
        $this->expectException(InvalidListName::class);
        $this->declarationLists->get('utter nonsense');
    }

    public function testIteration()
    {
        $this->assertGreaterThan(2, count($this->declarationLists));
        foreach ($this->declarationLists as $declarationList) {
            $this->assertInstanceOf(Spec\DeclarationList::class, $declarationList);
            $this->assertInstanceOf(Spec\Identifiable::class, $declarationList);
            $this->assertNotEmpty($declarationList::DECLARATIONS);
        }
    }
}
