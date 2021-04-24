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
            ['', null, [], '//localhost/'],
            ['https://localhost', null, ['scheme' => 'https', 'host' => 'localhost'], 'https://localhost/'],
            ['//example.com', null, ['host' => 'example.com'], '//example.com/'],
            ['/', null, ['path' => '/'], '//localhost/'],
            ['//example.com:2222', null, ['host' => 'example.com', 'port' => '2222'], '//example.com:2222/'],
            ['//john@example.com', null, ['user' => 'john', 'host' => 'example.com'], '//john@example.com/'],
            ['//john:123@example.com', null, ['user' => 'john', 'pass' => '123', 'host' => 'example.com'], '//john:123@example.com/'],
            ['https://example.com', null, ['scheme' => 'https', 'host' => 'example.com'], 'https://example.com/'],
            ['//example.com/demo/download', null, ['host' => 'example.com', 'path' => '/demo/download'], '//example.com/demo/download'],
            ['//example.com?filter=true', null, ['host' => 'example.com', 'query' => 'filter=true'], '//example.com/?filter=true'],
            ['//example.com#anchor', null, ['host' => 'example.com', 'fragment' => 'anchor'], '//example.com/#anchor'],
            ['//example.com/demo/download', new Url('//example.com/demo/'), ['host' => 'example.com', 'path' => '/demo/download'], '//example.com/demo/download'],
            ['download', new Url('//example.com/demo/'), ['host' => 'example.com', 'path' => '/demo/download'], '//example.com/demo/download'],
            ['../download', new Url('//example.com/demo/'), ['host' => 'example.com', 'path' => '/download'], '//example.com/download'],
            ['./download', new Url('//example.com/demo/'), ['host' => 'example.com', 'path' => '/demo/download'], '//example.com/demo/download'],
            ['./../demo/.././download', new Url('//example.com/demo/'), ['host' => 'example.com', 'path' => '/download'], '//example.com/download'],
        ];
    }

    /**
     * @dataProvider dataParsing()
     * @covers \AmpProject\Url::__construct()
     * @covers \AmpProject\Url::__toString()
     * @covers \AmpProject\Url::toArray()
     * @covers \AmpProject\Url::toString()
     */
    public function testParsing($urlString, $baseUrl, $expectedArray, $expectedString)
    {
        $url = new Url($urlString, $baseUrl);
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
        $url = new Url('https://john:123@example.com:2222/demo/?filter=true#anchor');
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

    public function testThrowsErrorOnInvalidUrlPart()
    {
        $url = new Url('//example.com');

        // Testing the return value _after_ the trigger_error() is not easily done in PHPUnit,
        // so we add our own error assertion here to test this return value.
        $errors = [];
        set_error_handler(
            static function ($errno, $errstr, $errfile, $errline, $errcontext = []) use (&$errors) {
                $errors[] = compact('errno', 'errstr', 'errfile', 'errline', 'errcontext');
            }
        );

        $this->assertNull($url->nonsense);
        $this->assertError($errors, 'Undefined property: AmpProject\Url::nonsense', E_USER_NOTICE);
    }

    private function assertError($errors, $errstr, $errno)
    {
        foreach ($errors as $error) {
            if ($error['errstr'] === $errstr && $error['errno'] === $errno) {
                return;
            }
        }

        $this->fail(
            "Expected error with level {$errno} and message '{$errstr}' was not triggered."
        );
    }
}
