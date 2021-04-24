<?php

namespace AmpProject\RemoteRequest;

use AmpProject\Exception\FailedToGetFromRemoteUrl;
use AmpProject\Tests\TestCase;
use LogicException;

/**
 * Tests for AmpProject\RemoteRequest\FilesystemRemoteGetRequest.
 *
 * @covers  \AmpProject\RemoteRequest\FilesystemRemoteGetRequest
 * @package ampproject/amp-toolbox
 */
class FilesystemRemoteGetRequestTest extends TestCase
{

    const MAPPING = [
        'https://example.com/existing-file'     => __DIR__ . '/RemoteGetRequestResponseTest.php',
        'https://example.com/non-existing-file' => __DIR__ . '/Nonsense.php',
    ];

    public function testGetReturnsFilesystemUrl()
    {
        $request = new FilesystemRemoteGetRequest(self::MAPPING);

        $response = $request->get('https://example.com/existing-file');
        $this->assertInstanceOf(RemoteGetRequestResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEmpty($response->getHeaders());
        $this->assertStringContainsString(
            'Tests for AmpProject\RemoteRequest\RemoteGetRequestResponse.',
            $response->getBody()
        );
    }

    public function testGetThrowsExceptionOnInvalidUrl()
    {
        $request = new FilesystemRemoteGetRequest(self::MAPPING);

        $this->expectException(LogicException::class);
        $this->expectExceptionMessage(
            'Trying to get a remote request from the filesystem for an unknown URL: https://example.com/different-file.'
        );

        $request->get('https://example.com/different-file');
    }

    public function testGetThrowsExceptionOnNonExistingFile()
    {
        $request = new FilesystemRemoteGetRequest(self::MAPPING);

        $this->expectException(LogicException::class);
        $this->expectExceptionMessage(
            'Trying to get a remote request from the filesystem for a file that is not accessible: https://example.com/non-existing-file => '
        );

        $request->get('https://example.com/non-existing-file');
    }
}
