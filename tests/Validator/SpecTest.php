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
        $spec      = new Spec();
        $attrsList = $spec->attrLists();
        $this->assertInstanceOf(Section\AttrLists::class, $attrsList);
    }

    public function testItCanProvideTheCssSection()
    {
        $spec = new Spec();
        $css  = $spec->css();
        $this->assertInstanceOf(Section\Css::class, $css);
    }

    public function testItCanProvideTheDeclarationListSection()
    {
        $spec            = new Spec();
        $declarationList = $spec->declarationList();
        $this->assertInstanceOf(Section\DeclarationList::class, $declarationList);
    }

    public function testItCanProvideTheDescendantTagListSection()
    {
        $spec              = new Spec();
        $descendantTagList = $spec->descendantTagList();
        $this->assertInstanceOf(Section\DescendantTagList::class, $descendantTagList);
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
