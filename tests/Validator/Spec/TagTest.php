<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidSpecRuleName;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyTag;

class TagTest extends TestCase
{

    /**
     * @covers \AmpProject\Validator\Spec\Tag::get()
     * @covers \AmpProject\Validator\Spec\Tag::has()
     * @covers \AmpProject\Validator\Spec\Tag::__get()
     */
    public function testDefaultValues()
    {
        $dummyTag = new DummyTag();

        $this->assertIsArray($dummyTag->alsoRequiresTagWarning);
        $this->assertIsArray($dummyTag->attrLists);
        $this->assertIsArray($dummyTag->disabledBy);
        $this->assertIsArray($dummyTag->disallowedAncestor);
        $this->assertIsArray($dummyTag->enabledBy);
        $this->assertIsArray($dummyTag->excludes);
        $this->assertIsArray($dummyTag->htmlFormat);
        $this->assertIsArray($dummyTag->requires);
        $this->assertIsArray($dummyTag->requiresExtension);
        $this->assertIsArray($dummyTag->satisfies);

        $this->assertFalse($dummyTag->explicitAttrsOnly);
        $this->assertFalse($dummyTag->mandatory);
        $this->assertFalse($dummyTag->mandatoryLastChild);
        $this->assertFalse($dummyTag->siblingsDisallowed);
        $this->assertFalse($dummyTag->unique);
        $this->assertFalse($dummyTag->uniqueWarning);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Tag::getId()
     * @covers \AmpProject\Validator\Spec\Tag::get()
     * @covers \AmpProject\Validator\Spec\Tag::has()
     * @covers \AmpProject\Validator\Spec\Tag::__get()
     */
    public function testGet()
    {
        $dummyTag = new DummyTag();

        $this->assertEquals('dummy', $dummyTag->getId());

        $this->assertEquals($dummyTag->tagName, $dummyTag->get('tagName'));

        $this->assertTrue($dummyTag->has('tagName'));
        $this->assertFalse($dummyTag->has('utter nonsense'));

        $this->assertEquals('a', $dummyTag->get('tagName'));
    }

    /**
     * @covers \AmpProject\Validator\Spec\Tag::get()
     * @covers \AmpProject\Exception\InvalidSpecRuleName::forSpecRuleName()
     */
    public function testThrowsExceptionForUnknownSpecRuleName()
    {
        $dummyTag = new DummyTag();

        $this->expectException(InvalidSpecRuleName::class);
        $this->expectExceptionMessage("Invalid spec rule name 'utter nonsense' was requested from the validator spec.");
        $dummyTag->get('utter nonsense');
    }
}
