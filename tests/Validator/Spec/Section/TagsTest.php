<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidFormat;
use AmpProject\Exception\InvalidSpecName;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec;

/**
 * Tests for AmpProject\Validator\Spec\Section\Tags.
 *
 * @covers  \AmpProject\Validator\Spec\Section\Tags
 * @package ampproject/amp-toolbox
 */
class TagsTest extends TestCase
{
    /** @var Tags */
    private $tags;

    /**
     * Sets up the fixture, for example, open a network connection.
     *
     * This method is called before each test.
     *
     * @return void
     */
    protected function set_up()
    {
        parent::set_up();
        $spec       = new Spec();
        $this->tags = $spec->tags();
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Tags::byTagName()
     */
    public function testByTagName()
    {
        $tags = $this->tags->byTagName('STOP');

        $this->assertIsArray($tags);
        $this->assertCount(2, $tags);

        foreach ($tags as $tag) {
            $this->assertInstanceOf(Spec\Tag::class, $tag);
            $this->assertEquals('stop', $tag->tagName);
        }

        $this->assertEquals('lineargradient > stop', $tags[0]->specName);
        $this->assertEquals('radialgradient > stop', $tags[1]->specName);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Tags::byTagName()
     */
    public function testByTagNameReturnsEmptyArrayForUnknownTagName()
    {
        $tags = $this->tags->byTagName('utter nonsense');

        $this->assertIsArray($tags);
        $this->assertCount(0, $tags);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Tags::bySpecName()
     */
    public function testBySpecName()
    {
        $tag = $this->tags->bySpecName('picture > source');

        $this->assertInstanceOf(Spec\Tag::class, $tag);
        $this->assertEquals('picture > source', $tag->specName);
        $this->assertEquals('source', $tag->tagName);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Tags::bySpecName()
     * @covers \AmpProject\Exception\InvalidSpecName::forSpecName()
     */
    public function testBySpecNameThrowsExceptionForUnknownSpecName()
    {
        $this->expectException(InvalidSpecName::class);
        $this->expectExceptionMessage("Invalid spec name 'utter nonsense' was requested from the validator spec.");
        $this->tags->bySpecName('utter nonsense');
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Tags::byFormat()
     */
    public function testByFormat()
    {
        $tags = $this->tags->byFormat(Format::AMP);

        $this->assertIsArray($tags);
        $this->assertGreaterThan(1, $tags);

        foreach ($tags as $tag) {
            $this->assertInstanceOf(Spec\Tag::class, $tag);
            $this->assertContains(Format::AMP, $tag->htmlFormat);
        }
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Tags::byFormat()
     * @covers \AmpProject\Exception\InvalidFormat::forFormat()
     */
    public function testByFormatThrowsExceptionForUnknownFormat()
    {
        $this->expectException(InvalidFormat::class);
        $this->expectExceptionMessage("Invalid format 'utter nonsense' was requested from the validator spec.");
        $this->tags->byFormat('utter nonsense');
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Tags::byExtensionSpec()
     */
    public function testByExtensionSpec()
    {
        $tags = $this->tags->byExtensionSpec(Extension::LIGHTBOX_GALLERY);
        $this->assertIsArray($tags);

        foreach ($tags as $tag) {
            $this->assertInstanceOf(Spec\Tag::class, $tag);
            $this->assertInstanceOf(Spec\TagWithExtensionSpec::class, $tag);
            $this->assertArrayHasKey(Spec\SpecRule::NAME, $tag->extensionSpec);
            $this->assertEquals(Extension::LIGHTBOX_GALLERY, $tag->extensionSpec[Spec\SpecRule::NAME]);
        }
    }

    public function testIteration()
    {
        $this->assertGreaterThan(10, count($this->tags));
        foreach ($this->tags as $tag) {
            $this->assertInstanceOf(Spec\Tag::class, $tag);
            $this->assertInstanceOf(Spec\Identifiable::class, $tag);
            $this->assertNotEmpty($tag::SPEC);
            if ($tag instanceof Spec\TagWithExtensionSpec) {
                $this->assertNotEmpty($tag::EXTENSION_SPEC);
            }
        }
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Tags::byTagName()
     * @covers \AmpProject\Validator\Spec\Section\Tags::byAggregateTagName()
     * @covers \AmpProject\Validator\Spec\AggregateTag::__construct()
     * @covers \AmpProject\Validator\Spec\AggregateTag::getId()
     * @covers \AmpProject\Validator\Spec\AggregateTag::get()
     */
    public function testAggregateTag()
    {
        $tags = $this->tags->byTagName('a');
        $this->assertIsArray($tags);

        $tag = $this->tags->byAggregateTagName('a');

        $this->assertInstanceOf(Spec\Tag::class, $tag);
        $this->assertNotInstanceOf(Spec\TagWithExtensionSpec::class, $tag);

        $this->assertInstanceOf(Spec\AggregateTag::class, $tag);
        $this->assertNotInstanceOf(Spec\AggregateTagWithExtensionSpec::class, $tag);

        $this->assertEquals('AggregateTag for a', $tag->getId());
        $this->assertEquals('a', $tag->tagName);
        $this->assertEquals('a', $tag->get('tagName'));
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Tags::byAggregateTagName()
     * @covers \AmpProject\Validator\Spec\AggregateTagWithExtensionSpec::getExtensionName()
     * @covers \AmpProject\Validator\Spec\AggregateTagWithExtensionSpec::getExtensionType()
     * @covers \AmpProject\Validator\Spec\AggregateTagWithExtensionSpec::getVersionsMeta()
     * @covers \AmpProject\Validator\Spec\AggregateTagWithExtensionSpec::getLatestVersion()
     */
    public function testAggregateTagWithExtensionSpec()
    {
        $tags = $this->tags->byExtensionSpec(Extension::TWITTER);
        $this->assertIsArray($tags);

        $tag = $this->tags->byAggregateExtensionSpec(Extension::TWITTER);

        $this->assertInstanceOf(Spec\Tag::class, $tag);
        $this->assertInstanceOf(Spec\TagWithExtensionSpec::class, $tag);

        $this->assertNotInstanceOf(Spec\AggregateTag::class, $tag);
        $this->assertInstanceOf(Spec\AggregateTagWithExtensionSpec::class, $tag);

        $this->assertEquals('amp-twitter', $tag->getExtensionName());
        $this->assertEquals('custom-element', $tag->getExtensionType());
        $this->assertEquals('0.1', $tag->getLatestVersion());

        $versionsMeta = $tag->getVersionsMeta();

        $this->assertArrayHasKey('0.1', $versionsMeta);
        $this->assertArrayHasKey('1.0', $versionsMeta);
    }
}
