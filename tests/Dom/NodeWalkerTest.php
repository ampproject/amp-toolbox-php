<?php

namespace AmpProject\Dom;

use AmpProject\Attribute;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Dom\NodeWalker.
 *
 * @coversDefaultClass \AmpProject\Dom\NodeWalker
 * @package ampproject/amp-toolbox
 */
class NodeWalkerTest extends TestCase
{
    const HTML = '
        <div id="1"></div>
        <div id="2">
            <div id="3">
                <div id="4"></div>
            </div>
        </div>
        <div id="5"></div>
        <div id="6">
            <div id="7"></div>
        </div>
        <div id="8"></div>
    ';

    /** @covers ::nextNode() */
    public function testNextNode()
    {
        $node   = Document::fromHtml(self::HTML)->body->firstChild;
        $output = '';

        while ($node !== null) {
            if ($node instanceof Element) {
                $output .= $node->getAttribute(Attribute::ID);
            }

            $node = NodeWalker::nextNode($node);
        }

        $this->assertEquals('12345678', $output);
    }

    /** @covers ::skipNodeAndChildren() */
    public function testSkipNodeAndChildren()
    {
        $node   = Document::fromHtml(self::HTML)->body->firstChild;
        $output = '';

        while ($node !== null) {
            if ($node instanceof Element) {
                $output .= $node->getAttribute(Attribute::ID);
            }

            $node = NodeWalker::skipNodeAndChildren($node);
        }

        $this->assertEquals('12568', $output);
    }
}
