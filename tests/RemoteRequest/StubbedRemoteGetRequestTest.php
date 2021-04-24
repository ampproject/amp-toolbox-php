<?php

namespace AmpProject\RemoteRequest;

use AmpProject\Tests\TestCase;
use LogicException;

/**
 * Tests for AmpProject\RemoteRequest\StubbedRemoteGetRequest.
 *
 * @covers  \AmpProject\RemoteRequest\StubbedRemoteGetRequest
 * @package ampproject/amp-toolbox
 */
class StubbedRemoteGetRequestTest extends TestCase
{

    public function testGetReturnsStubbedUrl()
    {
        $stubbedRequest = new StubbedRemoteGetRequest(
            [
                'https://example.com/stubbed-file' => 'stubbed response',
            ]
        );

        $response = $stubbedRequest->get('https://example.com/stubbed-file');
        $this->assertInstanceOf(RemoteGetRequestResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEmpty($response->getHeaders());
        $this->assertEquals('stubbed response', $response->getBody());
    }

    public function testGetThrowsExceptionOnInvalidUrl()
    {
        $stubbedRequest = new StubbedRemoteGetRequest(
            [
                'https://example.com/stubbed-file' => 'stubbed response',
            ]
        );

        $this->expectException(LogicException::class);
        $this->expectExceptionMessage(
            'Trying to stub a remote request for an unknown URL: https://example.com/different-file.'
        );

        $stubbedRequest->get('https://example.com/different-file');
    }
}
