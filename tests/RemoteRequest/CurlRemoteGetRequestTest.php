<?php

namespace AmpProject\RemoteRequest;

use AmpProject\RemoteGetRequest;
use AmpProject\Exception\FailedToGetFromRemoteUrl;
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

    /**
     * @covers ::get()
     */
    public function testGet()
    {
        $curlRequest = new CurlRemoteGetRequest(false);

        // When passed url is not string, it should throw exception.
        $this->expectException(FailedToGetFromRemoteUrl::class);
        $curlRequest->get(123);

        // When passed url is empty string, it should throw exception.
        $this->expectException(FailedToGetFromRemoteUrl::class);
        $curlRequest->get('');
    }
}
