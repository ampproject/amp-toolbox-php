<?php

namespace AmpProject\RemoteRequest;

use AmpProject\RemoteGetRequest;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\RemoteRequest\TemporaryFileCachedRemoteGetRequest.
 *
 * @covers  \AmpProject\RemoteRequest\TemporaryFileCachedRemoteGetRequest
 * @package ampproject/amp-toolbox
 */
class TemporaryFileCachedRemoteGetRequestTest extends TestCase
{

    public function testInstantiation()
    {
        $cachedRequest = new TemporaryFileCachedRemoteGetRequest();
        $this->assertInstanceOf(RemoteGetRequest::class, $cachedRequest);
        $this->assertInstanceOf(TemporaryFileCachedRemoteGetRequest::class, $cachedRequest);
    }
}
