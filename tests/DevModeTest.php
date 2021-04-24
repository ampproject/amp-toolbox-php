<?php

namespace AmpProject;

use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\DevMode.
 *
 * @covers  \AmpProject\DevMode
 * @package ampproject/amp-toolbox
 */
class DevModeTest extends TestCase
{

    public function dataIsActiveForDocument()
    {
        return [
            [ '<html><body></body></html>', false ],
            [ '<html data-ampdevmode><body></body></html>', true ],
        ];
    }

    /**
     * @dataProvider dataIsActiveForDocument
     * @covers \AmpProject\DevMode::isActiveForDocument()
     */
    public function testIsActiveForDocument($html, $expected)
    {
        $document = Document::fromHtml($html);
        $this->assertEquals($expected, DevMode::isActiveForDocument($document));
    }

    public function dataHasExemptionForNode()
    {
        $testData = [
            [ Document::fromHtml('<html><body id="node_to_test"><div data-ampdevmode></div></body></html>'), false ],
            [ Document::fromHtml('<html data-ampdevmode><body><div id="node_to_test" data-ampdevmode></div></body></html>'), true ],
            [ Document::fromHtml('<html id="node_to_test" data-ampdevmode><body><div data-ampdevmode></div></body></html>'), true ],
        ];

        $domWithoutDevModeOnRoot = Document::fromHtml('<html id="node_to_test"><body><div data-ampdevmode></div></body></html>');
        $domWithoutDevModeOnRoot->documentElement->setAttribute('data-ampdevmode', '');
        $testData[] = [$domWithoutDevModeOnRoot, false ];

        return $testData;
    }

    /**
     * @dataProvider dataHasExemptionForNode
     * @covers \AmpProject\DevMode::hasExemptionForNode()
     */
    public function testHasExemptionForNode($document, $expected)
    {
        $node = $document->xpath->query('//*[@id="node_to_test"]')->item(0);
        $this->assertEquals($expected, DevMode::hasExemptionForNode($node));
    }

    public function dataIsExemptFromValidation()
    {
        return [
            [ '<html><body id="node_to_test"><div data-ampdevmode></div></body></html>', false ],
            [ '<html><body><div id="node_to_test" data-ampdevmode></div></body></html>', false ],
            [ '<html data-ampdevmode><body id="node_to_test"><div data-ampdevmode></div></body></html>', false ],
            [ '<html data-ampdevmode><body><div id="node_to_test" data-ampdevmode></div></body></html>', true ],
        ];
    }

    /**
     * @dataProvider dataIsExemptFromValidation
     * @covers \AmpProject\DevMode::isExemptFromValidation()
     */
    public function testIsExemptFromValidation($html, $expected)
    {
        $document = Document::fromHtml($html);
        $node = $document->xpath->query('//*[@id="node_to_test"]')->item(0);
        $this->assertEquals($expected, DevMode::isExemptFromValidation($node));
    }

    public function testNonElement()
    {
        $document = Document::fromHtml(
            '<html data-ampdevmode><body><!-- comment --></body></html>'
        );

        $node = $document->body->firstChild;

        $this->assertEquals(false, DevMode::isExemptFromValidation($node));
    }

    public function testNonAttachedElement()
    {
        $element = new Element('div');
        $this->assertEquals(false, DevMode::isExemptFromValidation($element));
    }
}
