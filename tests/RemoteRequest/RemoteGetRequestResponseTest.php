<?php

namespace AmpProject\RemoteRequest;

use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\RemoteRequest\RemoteGetRequestResponse.
 *
 * @covers  \AmpProject\RemoteRequest\RemoteGetRequestResponse
 * @package ampproject/amp-toolbox
 */
class RemoteGetRequestResponseTest extends TestCase
{

    public function testGetData()
    {
        $response = new RemoteGetRequestResponse(
            'body data',
            [
                'Header A' => 'Setting A',
                'Header B' => 'Setting B',
            ],
            123
        );

        $this->assertEquals('body data', $response->getBody());

        $this->assertCount(2, $response->getHeaders());
        $this->assertTrue($response->hasHeader('Header A'));
        $this->assertTrue($response->hasHeader('header b'));
        $this->assertFalse($response->hasHeader('Header C'));
        $this->assertEquals(['Setting A'], $response->getHeader('Header A'));
        $this->assertEquals(['Setting B'], $response->getHeader('hEaDeR b'));
        $this->assertEquals([], $response->getHeader('Header C'));
        $this->assertEquals('Setting A', $response->getHeaderLine('header a'));
        $this->assertEquals('', $response->getHeaderLine('header c'));

        $this->assertEquals(123, $response->getStatusCode());
    }
}
