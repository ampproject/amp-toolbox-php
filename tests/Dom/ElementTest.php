<?php

namespace AmpProject\Common;

use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use PHPUnit\Framework\TestCase;

/**
 * Tests for AmpProject\Dom\Element.
 *
 * @covers Element
 * @package ampproject/amp-toolbox
 */
class ElementTest extends TestCase
{
    /**
     * Data provider for testing the byte count property.
     *
     * @return array Testing data.
     */
    public function dataByteCounts()
    {
        return [
            'count_style_attribute' => [
                '<div style="12345"></div><', 5,
            ],

            // Adding <head> tag because of bug (see https://github.com/ampproject/amp-toolbox-php/issues/28).
            'multibyte_chars_are_counted_in_bytes_not_chars' => [
                '<head></head><div style="Iñtërnâtiônàlizætiøn"></div>', 27,
            ],
        ];
    }

    /**
     * Test the byte count property.
     *
     * @dataProvider dataByteCounts
     *
     * @param string $html     HTML to test against.
     * @param int    $expected Expected number of bytes of inline styles.
     */
    public function testByteCounts($html, $expected)
    {
        $document = Document::fromHtmlFragment($html);
        /** @var Element $element */
        $element = $document->xpath->query('.//*[@style]', $document->body)->item(0);
        $this->assertEquals($expected, $element->inlineStyleByteCount);
    }
}
