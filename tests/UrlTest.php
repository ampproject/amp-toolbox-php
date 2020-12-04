<?php

namespace AmpProject;

use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Url.
 *
 * @covers  Url
 * @package ampproject/amp-toolbox
 */
class UrlTest extends TestCase
{

    public function dataIsValidNonDataUrl()
    {
        return [
            'absolute image URL' => ['https://example.com/image.jpg', true],

            'relative image URL with trailing slash' => ['/image.jpg', true],

            'relative image URL without trailing slash' => ['image.jpg', true],

            'data URI' => ['data:image/svg+xml,sagaedbaedbaergea', false],
        ];
    }

    /** @dataProvider dataIsValidNonDataUrl */
    public function testIsValidNonDataUrl($src, $expected)
    {
        $this->assertEquals($expected, Url::isValidNonDataUrl($src));
    }
}
