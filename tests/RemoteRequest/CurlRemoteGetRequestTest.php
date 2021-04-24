<?php

namespace AmpProject\RemoteRequest;

use AmpProject\RemoteGetRequest;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\RemoteRequest\CurlRemoteGetRequest.
 *
 * @covers  \AmpProject\RemoteRequest\CurlRemoteGetRequest
 * @package ampproject/amp-toolbox
 */
class CurlRemoteGetRequestTest extends TestCase
{

    public function testInstantiation()
    {
        $curlRequest = new CurlRemoteGetRequest(false, -1, -1);
        $this->assertInstanceOf(RemoteGetRequest::class, $curlRequest);
        $this->assertInstanceOf(CurlRemoteGetRequest::class, $curlRequest);
    }
}
