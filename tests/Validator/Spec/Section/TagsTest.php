<?php

namespace AmpProject\Validator\Spec\Section;

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
            $this->assertEquals('STOP', $tag->tagName());
        }

        $this->assertEquals('lineargradient > stop', $tags[0]->specName());
        $this->assertEquals('radialgradient > stop', $tags[1]->specName());
    }

    public function testBySpecName()
    {
        $tags = $this->tags->bySpecName('picture > source');

        $this->assertIsArray($tags);
        $this->assertCount(1, $tags);

        foreach ($tags as $tag) {
            $this->assertInstanceOf(Spec\Tag::class, $tag);
            $this->assertEquals('picture > source', $tag->specName());
        }

        $this->assertEquals('SOURCE', $tags[0]->tagName());
    }
}
