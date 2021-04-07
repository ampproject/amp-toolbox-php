<?php

namespace AmpProject;

use AmpProject\Exception\FailedToParseUrl;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Url.
 *
 * @covers  \AmpProject\Url
 * @package ampproject/amp-toolbox
 */
class UrlTest extends TestCase
{

    public function dataParsing()
    {
        return [
            ['', [], '//localhost/'],
            ['https://localhost', ['scheme' => 'https', 'host' => 'localhost'], 'https://localhost/'],
            ['//example.com', ['host' => 'example.com'], '//example.com/'],
            ['/', ['path' => '/'], '//localhost/'],
            ['//example.com:2222', ['host' => 'example.com', 'port' => '2222'], '//example.com:2222/'],
            ['//john@example.com', ['user' => 'john', 'host' => 'example.com'], '//john@example.com/'],
            ['//john:123@example.com', ['user' => 'john', 'pass' => '123', 'host' => 'example.com'], '//john:123@example.com/'],
            ['https://example.com', ['scheme' => 'https', 'host' => 'example.com'], 'https://example.com/'],
            ['//example.com/demo/download', ['host' => 'example.com', 'path' => '/demo/download'], '//example.com/demo/download'],
            ['//example.com?filter=true', ['host' => 'example.com', 'query' => 'filter=true'], '//example.com/?filter=true'],
            ['//example.com#anchor', ['host' => 'example.com', 'fragment' => 'anchor'], '//example.com/#anchor'],
        ];
    }

    /**
     * @dataProvider dataParsing()
     * @covers \AmpProject\Url::__construct()
     * @covers \AmpProject\Url::__toString()
     * @covers \AmpProject\Url::toArray()
     * @covers \AmpProject\Url::toString()
     */
    public function testParsing($urlString, $expectedArray, $expectedString)
    {
        $url = new Url($urlString);
        $this->assertEquals($expectedArray, $url->toArray(true));
        $this->assertEquals($expectedString, Url::toString($url->toArray()));
        $this->assertEquals($expectedString, Url::toString($url->toArray(true)));
        $this->assertEquals($expectedString, (string)$url);
    }

    public function testThrowsExceptionOnFailedParsing()
    {
        $this->expectException(FailedToParseUrl::class);
        $this->expectExceptionMessage('Failed to parse the URL \'https:///example.com\'.');
        new Url('https:///example.com');
    }

    public function testMagicProperties()
    {
        $url = new Url('https://john:123@example.com:2222/demo/#anchor?filter=true');
        $this->assertEquals('https', $url->scheme);
        $this->assertEquals('example.com', $url->host);
        $this->assertEquals('2222', $url->port);
        $this->assertEquals('john', $url->user);
        $this->assertEquals('123', $url->pass);
        $this->assertEquals('/demo/', $url->path);
        $this->assertEquals('filter=true', $url->query);
        $this->assertEquals('anchor', $url->fragment);

        $this->expectError();
        $url->nonsense;
    }

    public function dataIsValidNonDataUrl()
    {
        return [
            'absolute image URL' => ['https://example.com/image.jpg', true],

            'relative image URL with trailing slash' => ['/image.jpg', true],

            'relative image URL without trailing slash' => ['image.jpg', true],

            'data URI' => ['data:image/svg+xml,sagaedbaedbaergea', false],
        ];
    }

    /**
     * @dataProvider dataIsValidNonDataUrl
     * @covers \AmpProject\Url::isValidNonDataUrl()
     */
    public function testIsValidNonDataUrl($src, $expected)
    {
        $this->assertEquals($expected, (new Url($src))->isValidNonDataUrl());
    }
}
