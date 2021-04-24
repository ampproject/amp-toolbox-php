<?php

namespace AmpProject\RemoteRequest;

use AmpProject\RemoteGetRequest;
use AmpProject\Tests\TestCase;
use RuntimeException;

/**
 * Tests for AmpProject\RemoteRequest\FallbackRemoteGetRequest.
 *
 * @covers  \AmpProject\RemoteRequest\FallbackRemoteGetRequest
 * @package ampproject/amp-toolbox
 */
class FallbackRemoteGetRequestTest extends TestCase
{
    public function testGetReturnsFallbackUrl()
    {
        $fallbackRequest1 = $this->createMock(RemoteGetRequest::class);
        $fallbackRequest1->method('get')->willReturnMap(
            [
                ['file 1', new RemoteGetRequestResponse('data-1-1', [], 200)],
            ]
        );

        $fallbackRequest2 = $this->createMock(RemoteGetRequest::class);
        $fallbackRequest2->method('get')->willReturnMap(
            [
                ['file 1', new RemoteGetRequestResponse('data-2-1', [], 200)],
                ['file 2', new RemoteGetRequestResponse('data-2-2', [], 200)],
            ]
        );

        $fallbackRequest3 = $this->createMock(RemoteGetRequest::class);
        $fallbackRequest3->method('get')->willReturnMap(
            [
                ['file 1', new RemoteGetRequestResponse('data-3-1', [], 200)],
                ['file 2', new RemoteGetRequestResponse('data-3-2', [], 200)],
                ['file 3', new RemoteGetRequestResponse('data-3-3', [], 200)],
            ]
        );

        $fallbackRequest4 = $this->createMock(RemoteGetRequest::class);
        $fallbackRequest4->method('get')->willReturnCallback(
            static function ($argument) {
                if ($argument === 'throw exception') {
                    throw new RuntimeException('Boom!');
                }
            }
        );

        $request = new FallbackRemoteGetRequest(
            $fallbackRequest1,
            $fallbackRequest2,
            $fallbackRequest3,
            $fallbackRequest4
        );

        $response = $request->get('file 1');
        $this->assertInstanceOf(RemoteGetRequestResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEmpty($response->getHeaders());
        $this->assertEquals('data-1-1', $response->getBody());

        $response = $request->get('file 2');
        $this->assertInstanceOf(RemoteGetRequestResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEmpty($response->getHeaders());
        $this->assertEquals('data-2-2', $response->getBody());

        $response = $request->get('file 3');
        $this->assertInstanceOf(RemoteGetRequestResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEmpty($response->getHeaders());
        $this->assertEquals('data-3-3', $response->getBody());

        $response = $request->get('unknown file');
        $this->assertInstanceOf(RemoteGetRequestResponse::class, $response);
        $this->assertEquals(503, $response->getStatusCode());
        $this->assertEmpty($response->getHeaders());
        $this->assertEquals('', $response->getBody());

        $response = $request->get('throw exception');
        $this->assertInstanceOf(RemoteGetRequestResponse::class, $response);
        $this->assertEquals(503, $response->getStatusCode());
        $this->assertEmpty($response->getHeaders());
        $this->assertEquals('', $response->getBody());
    }
}
