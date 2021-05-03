<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Attribute;
use AmpProject\Exception\InvalidAttributeName;
use AmpProject\Exception\InvalidListName;
use AmpProject\Exception\InvalidSpecName;
use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec;

/**
 * Tests for AmpProject\Validator\Spec\Section\AttributeLists.
 *
 * @covers  \AmpProject\Validator\Spec\Section\AttributeLists
 * @package ampproject/amp-toolbox
 */
class AttributeListsTest extends TestCase
{
    /** @var AttributeLists */
    private $attributeLists;

    public function __construct()
    {
        parent::__construct();
        $spec       = new Spec();
        $this->attributeLists = $spec->attributeLists();
    }

    public function testGetByAttributeListName()
    {
        $attributeList = $this->attributeLists->get('$GLOBAL_ATTRS');

        $this->assertInstanceOf(Spec\AttributeList::class, $attributeList);
        $this->assertInstanceOf(Spec\AttributeList\GlobalAttrs::class, $attributeList);

        $this->assertIsArray($attributeList::ATTRIBUTES);
        $this->assertNotEmpty($attributeList::ATTRIBUTES);

        $this->assertTrue($attributeList->has(Attribute::TITLE));
        $this->assertEquals([], $attributeList->get(Attribute::TITLE));
    }

    public function testGetThrowsExceptionForUnknownAttributeListName()
    {
        $this->expectException(InvalidListName::class);
        $this->attributeLists->get('utter nonsense');
    }

    public function testGetThrowsExceptionForUnknownAttributeName()
    {
        $this->expectException(InvalidAttributeName::class);
        $attributeList = $this->attributeLists->get('$GLOBAL_ATTRS');
        $attributeList->get('utter nonsense');
    }

    public function testIteration()
    {
        $this->assertGreaterThan(10, count($this->attributeLists));
        foreach ($this->attributeLists as $attributeList) {
            $this->assertInstanceOf(Spec\AttributeList::class, $attributeList);
            $this->assertNotEmpty($attributeList::ATTRIBUTES);
        }
    }
}
