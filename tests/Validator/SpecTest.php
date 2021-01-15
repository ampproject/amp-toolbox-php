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
        $spec = new Spec();
        $tags = $spec->attrLists();
        $this->assertInstanceOf(Section\AttrLists::class, $tags);
    }

    public function testItCanProvideTheCssSection()
    {
        $spec = new Spec();
        $tags = $spec->css();
        $this->assertInstanceOf(Section\Css::class, $tags);
    }

    public function testItCanProvideTheDeclarationListSection()
    {
        $spec = new Spec();
        $tags = $spec->declarationList();
        $this->assertInstanceOf(Section\DeclarationList::class, $tags);
    }

    public function testItCanProvideTheDescendantTagListSection()
    {
        $spec = new Spec();
        $tags = $spec->descendantTagList();
        $this->assertInstanceOf(Section\DescendantTagList::class, $tags);
    }

    public function testItCanProvideTheDocSection()
    {
        $spec = new Spec();
        $tags = $spec->doc();
        $this->assertInstanceOf(Section\Doc::class, $tags);
    }

    public function testItCanProvideTheErrorsSection()
    {
        $spec = new Spec();
        $tags = $spec->errors();
        $this->assertInstanceOf(Section\Errors::class, $tags);
    }

    public function testItCanProvideTheMinValidatorRevisionRequiredSection()
    {
        $spec = new Spec();
        $tags = $spec->minValidatorRevisionRequired();
        $this->assertInstanceOf(Section\MinValidatorRevisionRequired::class, $tags);
    }

    public function testItCanProvideTheScriptSpecUrlSection()
    {
        $spec = new Spec();
        $tags = $spec->scriptSpecUrl();
        $this->assertInstanceOf(Section\ScriptSpecUrl::class, $tags);
    }

    public function testItCanProvideTheSpecFileRevisionSection()
    {
        $spec = new Spec();
        $tags = $spec->specFileRevision();
        $this->assertInstanceOf(Section\SpecFileRevision::class, $tags);
    }

    public function testItCanProvideTheStylesSpecUrlSection()
    {
        $spec = new Spec();
        $tags = $spec->stylesSpecUrl();
        $this->assertInstanceOf(Section\StylesSpecUrl::class, $tags);
    }

    public function testItCanProvideTheTagsSection()
    {
        $spec = new Spec();
        $tags = $spec->tags();
        $this->assertInstanceOf(Section\Tags::class, $tags);
    }

    public function testItCanProvideTheTemplateSpecUrlSection()
    {
        $spec = new Spec();
        $tags = $spec->templateSpecUrl();
        $this->assertInstanceOf(Section\TemplateSpecUrl::class, $tags);
    }
}
