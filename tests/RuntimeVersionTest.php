<?php

namespace AmpProject;

use AmpProject\RemoteRequest\RemoteGetRequestResponse;
use AmpProject\RemoteRequest\StubbedRemoteGetRequest;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\RuntimeVersion.
 *
 * @covers  \AmpProject\RuntimeVersion
 * @package ampproject/amp-toolbox
 */
class RuntimeVersionTest extends TestCase
{

    /**
     * Associative array of mapping data for stubbing remote requests.
     *
     * @var array
     */
    const STUBBED_REMOTE_REQUESTS = [
        'https://cdn.ampproject.org/rtv/metadata' => '{"ampRuntimeVersion":"012345678900000","ampCssUrl":"https://cdn.ampproject.org/rtv/012345678900000/v0.css","canaryPercentage":"0.1","diversions":["023456789000000","034567890100000","045678901200000"]}',
        'https://cdn.ampproject.org/v0.css'       => '/* v0.css */',
    ];

    /**
     * Test whether the release version is returned by default.
     *
     * @covers \AmpProject\RuntimeVersion::currentVersion()
     */
    public function testItReturnsReleaseVersionByDefault()
    {
        $runtimeVersion = new RuntimeVersion(new StubbedRemoteGetRequest(self::STUBBED_REMOTE_REQUESTS));
        $version        = $runtimeVersion->currentVersion();
        $this->assertEquals('012345678900000', $version);
    }

    /**
     * Test whether the canary version can be requested via an option.
     *
     * @covers \AmpProject\RuntimeVersion::currentVersion()
     */
    public function testItReturnsCanaryVersionViaOption()
    {
        $runtimeVersion = new RuntimeVersion(new StubbedRemoteGetRequest(self::STUBBED_REMOTE_REQUESTS));
        $version = $runtimeVersion->currentVersion(['canary' => true]);
        $this->assertEquals('023456789000000', $version);
    }

    /**
     * Test remote request returning bad status code.
     *
     * @covers \AmpProject\RuntimeVersion::currentVersion()
     */
    public function testItReturnsZeroOnFailedRequests()
    {
        $remoteRequest = $this->createMock(RemoteGetRequest::class);
        $remoteRequest->method('get')->willReturn(new RemoteGetRequestResponse('', [], 500));

        $runtimeVersion = new RuntimeVersion($remoteRequest);

        $this->assertEquals('0', $runtimeVersion->currentVersion());
    }
}
