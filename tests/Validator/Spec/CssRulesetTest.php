<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidSpecRuleName;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyCssRuleset;

class CssRulesetTest extends TestCase
{
    /**
     * @covers \AmpProject\Validator\Spec\Tag::get()
     * @covers \AmpProject\Validator\Spec\Tag::has()
     * @covers \AmpProject\Validator\Spec\Tag::__get()
     */
    public function testDefaultValues()
    {
        $dummyCssRuleset = new DummyCssRuleset();

        $this->assertFalse($dummyCssRuleset->allowAllDeclarationInStyle);
        $this->assertFalse($dummyCssRuleset->allowImportant);
        $this->assertFalse($dummyCssRuleset->expandVendorPrefixes);
        $this->assertFalse($dummyCssRuleset->maxBytesIsWarning);
        $this->assertFalse($dummyCssRuleset->urlBytesIncluded);

        $this->assertIsArray($dummyCssRuleset->declarationListSvg);
        $this->assertIsArray($dummyCssRuleset->disabledBy);
        $this->assertIsArray($dummyCssRuleset->enabledBy);
        $this->assertIsArray($dummyCssRuleset->fontUrlSpec);
        $this->assertIsArray($dummyCssRuleset->htmlFormat);
        $this->assertIsArray($dummyCssRuleset->imageUrlSpec);
    }

    /**
     * @covers \AmpProject\Validator\Spec\CssRuleset::getId()
     * @covers \AmpProject\Validator\Spec\CssRuleset::get()
     * @covers \AmpProject\Validator\Spec\CssRuleset::has()
     * @covers \AmpProject\Validator\Spec\Tag::__get()
     */
    public function testGet()
    {
        $dummyCssRuleset = new DummyCssRuleset();

        $this->assertEquals('dummy', $dummyCssRuleset->getId());
        $this->assertEquals('dummy', $dummyCssRuleset->id);

        $this->assertEquals($dummyCssRuleset->maxBytes, $dummyCssRuleset->get('maxBytes'));

        $this->assertTrue($dummyCssRuleset->has('maxBytes'));
        $this->assertFalse($dummyCssRuleset->has('utter nonsense'));

        $this->assertEquals(42, $dummyCssRuleset->get('maxBytes'));
        $this->assertEquals(42, $dummyCssRuleset->maxBytes);
    }

    /**
     * @covers \AmpProject\Validator\Spec\CssRuleset::get()
     * @covers \AmpProject\Exception\InvalidSpecRuleName::forSpecRuleName()
     */
    public function testThrowsExceptionForUnknownCssRuleset()
    {
        $dummyCssRuleset = new DummyCssRuleset();

        $this->expectException(InvalidSpecRuleName::class);
        $this->expectExceptionMessage("Invalid spec rule name 'utter nonsense' was requested from the validator spec.");
        $dummyCssRuleset->get('utter nonsense');
    }
}
