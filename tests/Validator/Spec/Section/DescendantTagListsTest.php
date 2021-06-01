<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidDescendantTagName;
use AmpProject\Exception\InvalidListName;
use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec;

/**
 * Tests for AmpProject\Validator\Spec\Section\DescendantTagLists.
 *
 * @covers  \AmpProject\Validator\Spec\Section\DescendantTagLists
 * @package ampproject/amp-toolbox
 */
class DescendantTagListsTest extends TestCase
{
    /** @var DescendantTagLists */
    private $descendantTagLists;

    public function __construct()
    {
        parent::__construct();
        $spec       = new Spec();
        $this->descendantTagLists = $spec->descendantTagLists();
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\DescendantTagLists::get()
     */
    public function testGetByDescendantTagListName()
    {
        $descendantTagList = $this->descendantTagLists->get('amp-mega-menu-allowed-descendants');

        $this->assertInstanceOf(Spec\DescendantTagList::class, $descendantTagList);
        $this->assertInstanceOf(Spec\DescendantTagList\AmpMegaMenuAllowedDescendants::class, $descendantTagList);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\DescendantTagLists::get()
     * @covers \AmpProject\Exception\InvalidListName::forDescendantTagList()
     */
    public function testGetThrowsExceptionForUnknownDescendantTagListName()
    {
        $this->expectException(InvalidListName::class);
        $this->descendantTagLists->get('utter nonsense');
    }

    public function testIteration()
    {
        $this->assertGreaterThan(7, count($this->descendantTagLists));
        foreach ($this->descendantTagLists as $descendantTagList) {
            $this->assertInstanceOf(Spec\DescendantTagList::class, $descendantTagList);
            $this->assertNotEmpty($descendantTagList::DESCENDANT_TAGS);
        }
    }
}
