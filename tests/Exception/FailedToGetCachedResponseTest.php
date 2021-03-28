<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the FailedToGetCachedResponse exception.
 *
 * @covers \AmpProject\Exception\FailedToGetCachedResponse
 * @package ampproject/amp-toolbox
 */
class FailedToGetCachedResponseTest extends TestCase
{

    /**
     * Test throwing the exception with a URL.
     */
    public function testThrowingWithUrl()
    {
        $this->expectException(FailedToGetCachedResponse::class);
        $this->expectExceptionMessage("Failed to retrieve the cached response for the URL 'https://example.com/'.");

        throw FailedToGetCachedResponse::withUrl('https://example.com/');
    }
}
