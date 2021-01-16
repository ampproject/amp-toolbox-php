<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidDeclarationListName;
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
        $spec                   = new Spec();
        $this->declarationLists = $spec->declarationLists();
    }

    public function testGet()
    {
        $declarationList = $this->declarationLists->get('BASIC_DECLARATIONS');

        $this->assertInstanceOf(Spec\DeclarationList::class, $declarationList);
    }

    public function testGetThrowsExceptionForUnknownDeclarationListName()
    {
        $this->expectException(InvalidDeclarationListName::class);
        $this->declarationLists->get('utter nonsense');
    }
}
