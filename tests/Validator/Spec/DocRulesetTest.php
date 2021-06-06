<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidSpecRuleName;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyDocRuleset;

class DocRulesetTest extends TestCase
{
    /**
     * @covers \AmpProject\Validator\Spec\Tag::get()
     * @covers \AmpProject\Validator\Spec\Tag::has()
     * @covers \AmpProject\Validator\Spec\Tag::__get()
     */
    public function testDefaultValues()
    {
        $dummyDocRuleset = new DummyDocRuleset();

        $this->assertIsString($dummyDocRuleset->id);
        $this->assertIsArray($dummyDocRuleset->htmlFormat);
    }

    /**
     * @covers \AmpProject\Validator\Spec\DocRuleset::getId()
     * @covers \AmpProject\Validator\Spec\DocRuleset::get()
     * @covers \AmpProject\Validator\Spec\DocRuleset::has()
     * @covers \AmpProject\Validator\Spec\Tag::__get()
     */
    public function testGet()
    {
        $dummyDocRuleset = new DummyDocRuleset();

        $this->assertEquals('DUMMY', $dummyDocRuleset->getId());
        $this->assertEquals('DUMMY', $dummyDocRuleset->id);

        $this->assertEquals($dummyDocRuleset->maxBytes, $dummyDocRuleset->get('maxBytes'));

        $this->assertTrue($dummyDocRuleset->has('maxBytes'));
        $this->assertFalse($dummyDocRuleset->has('utter nonsense'));

        $this->assertEquals(123, $dummyDocRuleset->get('maxBytes'));
    }

    /**
     * @covers \AmpProject\Validator\Spec\DocRuleset::get()
     * @covers \AmpProject\Exception\InvalidSpecRuleName::forSpecRuleName()
     */
    public function testThrowsExceptionForUnknownDocRuleset()
    {
        $dummyDocRuleset = new DummyDocRuleset();

        $this->expectException(InvalidSpecRuleName::class);
        $this->expectExceptionMessage("Invalid spec rule name 'utter nonsense' was requested from the validator spec.");
        $dummyDocRuleset->get('utter nonsense');
    }
}
