<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidExtension;
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

    public function __construct()
    {
        parent::__construct();
        $spec       = new Spec();
        $this->tags = $spec->tags();
    }

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

    public function testByTagNameReturnsEmptyArrayForUnknownTagName()
    {
        $tags = $this->tags->byTagName('utter nonsense');

        $this->assertIsArray($tags);
        $this->assertCount(0, $tags);
    }

    public function testBySpecName()
    {
        $tag = $this->tags->bySpecName('picture > source');

        $this->assertInstanceOf(Spec\Tag::class, $tag);
        $this->assertEquals('picture > source', $tag->specName);
        $this->assertEquals('source', $tag->tagName);
    }

    public function testBySpecNameThrowsExceptionForUnknownSpecName()
    {
        $this->expectException(InvalidSpecName::class);
        $this->tags->bySpecName('utter nonsense');
    }

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

    public function testByFormatThrowsExceptionForUnknownFormat()
    {
        $this->expectException(InvalidFormat::class);
        $this->tags->byFormat('utter nonsense');
    }

    public function testByExtensionSpec()
    {
        $tag = $this->tags->byExtensionSpec(Extension::LIGHTBOX_GALLERY);

        $this->assertInstanceOf(Spec\Tag::class, $tag);
        $this->assertArrayHasKey(Spec\SpecRule::NAME, $tag->extensionSpec);
        $this->assertEquals(Extension::LIGHTBOX_GALLERY, $tag->extensionSpec[Spec\SpecRule::NAME]);
    }

    public function testByExtensionSpecThrowsExceptionForUnknownExtension()
    {
        $this->expectException(InvalidExtension::class);
        $this->tags->byExtensionSpec('utter nonsense');
    }
}
