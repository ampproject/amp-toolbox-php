<?php

namespace AmpProject\RemoteRequest;

use AmpProject\Exception\FailedToGetCachedResponse;
use AmpProject\RemoteGetRequest;
use AmpProject\RemoteRequest\StubbedRemoteGetRequest;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;
use org\bovigo\vfs\vfsStream;

/**
 * Tests for AmpProject\RemoteRequest\TemporaryFileCachedRemoteGetRequest.
 *
 * @covers  \AmpProject\RemoteRequest\TemporaryFileCachedRemoteGetRequest
 * @package ampproject/amp-toolbox
 */
class TemporaryFileCachedRemoteGetRequestTest extends TestCase
{
    /**
     * The test directory name.
     *
     * @var string
     */
    const DIRECTORY_NAME = 'test-temp-dir';

    /**
     * Set up test environment.
     */
    public function set_up() // phpcs:ignore PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    {
        parent::set_up();
        vfsStream::setup(self::DIRECTORY_NAME);
    }

    /**
     * Test the TemporaryFileCachedRemoteGetRequest instance.
     *
     * @covers \AmpProject\RemoteRequest\TemporaryFileCachedRemoteGetRequest::__construct()
     */
    public function testInstantiation()
    {
        $cachedRequest = $this->getTemporaryFileCachedRemoteGetRequest();
        $this->assertInstanceOf(RemoteGetRequest::class, $cachedRequest);
        $this->assertInstanceOf(TemporaryFileCachedRemoteGetRequest::class, $cachedRequest);
    }

    /**
     * Test caching workflow.
     *
     * @covers \AmpProject\RemoteRequest\TemporaryFileCachedRemoteGetRequest::get()
     */
    public function testCachingWorkflow()
    {
        $cachedRequest = $this->getTemporaryFileCachedRemoteGetRequest();

        $urls            = array_keys(TestMarkup::STUBBED_REMOTE_REQUESTS);
        $url             = $urls[0];
        $stubbedResponse = TestMarkup::STUBBED_REMOTE_REQUESTS[$url]['body'];

        $filename = TemporaryFileCachedRemoteGetRequest::CACHED_FILE_PREFIX . md5($url);
        $file     = vfsStream::url(self::DIRECTORY_NAME . "/{$filename}");

        // Test that the temp file does not exist at first.
        $this->assertFalse(file_exists($file));

        $cachedRequest->get($url);

        // Test that the temp file exists after getting the response.
        $this->assertTrue(file_exists($file));

        // Test that file content is valid response data.
        $content                   = file_get_contents($file);
        $serializedStubbedResponse = serialize(new RemoteGetRequestResponse($stubbedResponse));

        $this->assertEquals($serializedStubbedResponse, $content);

        // Test the caching system by modifying the cached data in previous step.
        $newBody     = 'foo';
        $newResponse = new RemoteGetRequestResponse($newBody);

        file_put_contents($file, serialize($newResponse));

        $response = $cachedRequest->get($url);

        $this->assertEquals($newBody, $response->getBody());

        // Test cache expiry. max-age should invalidate the cache.
        $newBody     = 'bar';
        $newResponse = new RemoteGetRequestResponse($newBody, [
            TemporaryFileCachedRemoteGetRequest::CACHE_CONTROL => 'private, max-age=0, stale-while-revalidate=1206600',
        ]);

        file_put_contents($file, serialize($newResponse));

        $response = $cachedRequest->get($url);

        $this->assertEquals($stubbedResponse, $response->getBody());
    }

    /**
     * Test exception thrown by TemporaryFileCachedRemoteGetRequest.
     *
     * @covers \AmpProject\RemoteRequest\TemporaryFileCachedRemoteGetRequest::getRemoteResponse()
     */
    public function testCacheException()
    {
        $cachedRequest = $this->getTemporaryFileCachedRemoteGetRequest();

        $this->expectException(FailedToGetCachedResponse::class);

        $cachedRequest->get('http://example.com');
    }

    /**
     * Test that errors do not get cached.
     */
    public function testCacheOnlyValidRepsonses()
    {
        $unknownUrl = 'https://cdn.ampproject.com/non-existant.really.not.html';

        $tmpDirectory = vfsStream::url(self::DIRECTORY_NAME);
        $cachedRequest = new TemporaryFileCachedRemoteGetRequest(
            new StubbedRemoteGetRequest([$unknownUrl => ['body' => '404 content', 'status' => 404]]),
            $tmpDirectory
        );

        $cachedRequest->get($unknownUrl);

        $this->assertFileDoesNotExist($tmpDirectory . DIRECTORY_SEPARATOR . TemporaryFileCachedRemoteGetRequest::CACHED_FILE_PREFIX . md5($unknownUrl));
    }

    /**
     * Get the request class instance to test against.
     *
     * @return TemporaryFileCachedRemoteGetRequest Request object instance to test against.
     */
    private function getTemporaryFileCachedRemoteGetRequest()
    {
        return new TemporaryFileCachedRemoteGetRequest(
            new StubbedRemoteGetRequest(TestMarkup::STUBBED_REMOTE_REQUESTS),
            vfsStream::url(self::DIRECTORY_NAME)
        );
    }
}
