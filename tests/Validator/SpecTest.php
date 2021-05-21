<?php

namespace AmpProject\Validator;

use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec\Section;

/**
 * Tests for AmpProject\Validator\Spec.
 *
 * @covers  \AmpProject\Validator\Spec
 * @package ampproject/amp-toolbox
 */
class SpecTest extends TestCase
{

    public function testItCanBeInstantiated()
    {
        $spec = new Spec();
        $this->assertInstanceOf(Spec::class, $spec);
    }

    public function testItCanProvideTheAttrListsSection()
    {
        $spec          = new Spec();
        $attributeList = $spec->attributeLists();
        $this->assertInstanceOf(Section\AttributeLists::class, $attributeList);
    }

    public function testItCanProvideTheCssRulesetsSection()
    {
        $spec = new Spec();
        $css  = $spec->cssRulesets();
        $this->assertInstanceOf(Section\CssRulesets::class, $css);
    }

    public function testItCanProvideTheDeclarationListsSection()
    {
        $spec             = new Spec();
        $declarationLists = $spec->declarationLists();
        $this->assertInstanceOf(Section\DeclarationLists::class, $declarationLists);
    }

    public function testItCanProvideTheDescendantTagListsSection()
    {
        $spec              = new Spec();
        $descendantTagList = $spec->descendantTagLists();
        $this->assertInstanceOf(Section\DescendantTagLists::class, $descendantTagList);
    }

    public function testItCanProvideTheDocSection()
    {
        $spec = new Spec();
        $doc  = $spec->doc();
        $this->assertInstanceOf(Section\Doc::class, $doc);
    }

    public function testItCanProvideTheErrorsSection()
    {
        $spec   = new Spec();
        $errors = $spec->errors();
        $this->assertInstanceOf(Section\Errors::class, $errors);
    }

    public function testItCanProvideTheMinValidatorRevisionRequiredSection()
    {
        $spec                         = new Spec();
        $minValidatorRevisionRequired = $spec->minValidatorRevisionRequired();
        $this->assertIsInt($minValidatorRevisionRequired);
    }

    public function testItCanProvideTheScriptSpecUrlSection()
    {
        $spec          = new Spec();
        $scriptSpecUrl = $spec->scriptSpecUrl();
        $this->assertIsString($scriptSpecUrl);
    }

    public function testItCanProvideTheSpecFileRevisionSection()
    {
        $spec             = new Spec();
        $specFileRevision = $spec->specFileRevision();
        $this->assertIsInt($specFileRevision);
    }

    public function testItCanProvideTheStylesSpecUrlSection()
    {
        $spec          = new Spec();
        $stylesSpecUrl = $spec->stylesSpecUrl();
        $this->assertIsString($stylesSpecUrl);
    }

    public function testItCanProvideTheTagsSection()
    {
        $spec = new Spec();
        $tags = $spec->tags();
        $this->assertInstanceOf(Section\Tags::class, $tags);
    }

    public function testItCanProvideTheTemplateSpecUrlSection()
    {
        $spec            = new Spec();
        $templateSpecUrl = $spec->templateSpecUrl();
        $this->assertIsString($templateSpecUrl);
    }
}
