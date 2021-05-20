<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Attribute;
use AmpProject\Exception\InvalidDeclarationName;
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

    public function __construct()
    {
        parent::__construct();
        $spec       = new Spec();
        $this->declarationLists = $spec->declarationLists();
    }

    public function testGetByDeclarationListName()
    {
        $declarationList = $this->declarationLists->get('BASIC_DECLARATIONS');

        $this->assertInstanceOf(Spec\DeclarationList::class, $declarationList);
        $this->assertInstanceOf(Spec\DeclarationList\BasicDeclarations::class, $declarationList);

        $this->assertIsArray($declarationList::DECLARATIONS);
        $this->assertNotEmpty($declarationList::DECLARATIONS);

        $this->assertTrue($declarationList->has(Attribute::FONT));
        $this->assertFalse($declarationList->has('utter nonsense'));
        $this->assertEquals([], $declarationList->get(Attribute::FONT));
    }

    public function testGetThrowsExceptionForUnknownDeclarationListName()
    {
        $this->expectException(InvalidListName::class);
        $this->declarationLists->get('utter nonsense');
    }

    public function testGetThrowsExceptionForUnknownDeclarationName()
    {
        $this->expectException(InvalidDeclarationName::class);
        $declarationList = $this->declarationLists->get('BASIC_DECLARATIONS');
        $declarationList->get('utter nonsense');
    }

    public function testIteration()
    {
        $this->assertGreaterThan(2, count($this->declarationLists));
        foreach ($this->declarationLists as $declarationList) {
            $this->assertInstanceOf(Spec\DeclarationList::class, $declarationList);
            $this->assertNotEmpty($declarationList::DECLARATIONS);
        }
    }
}
