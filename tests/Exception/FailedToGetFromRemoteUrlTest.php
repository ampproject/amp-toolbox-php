<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;
use RuntimeException;

/**
 * Test the FailedToGetFromRemoteUrl exception.
 *
 * @covers \AmpProject\Exception\FailedToGetFromRemoteUrl
 * @package ampproject/amp-toolbox
 */
class FailedToGetFromRemoteUrlTest extends TestCase
{

    /**
     * Test throwing the exception with a URL and an HTTP status.
     */
    public function testThrowingWithHttpStatus()
    {
        $this->expectException(FailedToGetFromRemoteUrl::class);
        $this->expectExceptionMessage(
            "Failed to fetch the contents from the URL 'https://example.com/' as it returned HTTP status 404."
        );

        throw FailedToGetFromRemoteUrl::withHttpStatus('https://example.com/', 404);
    }

    /**
     * Test throwing the exception with a URL but without an HTTP status.
     */
    public function testThrowingWithoutHttpStatus()
    {
        $this->expectException(FailedToGetFromRemoteUrl::class);
        $this->expectExceptionMessage("Failed to fetch the contents from the URL 'https://example.com/'.");

        throw FailedToGetFromRemoteUrl::withoutHttpStatus('https://example.com/');
    }

    /**
     * Test throwing the exception with a URL and another exception.
     */
    public function testThrowingWithException()
    {
        $this->expectException(FailedToGetFromRemoteUrl::class);
        $this->expectExceptionMessage(
            "Failed to fetch the contents from the URL 'https://example.com/': thrown exception."
        );

        throw FailedToGetFromRemoteUrl::withException('https://example.com/', new RuntimeException('thrown exception'));
    }
}
