<?php

namespace AmpProject\RemoteRequest;

use AmpProject\Exception\FailedToGetCachedResponse;
use AmpProject\RemoteGetRequest;
use AmpProject\Response;
use DateTimeImmutable;
use Exception;

/**
 * Temporarily cache remote response.
 *
 * @package ampproject/amp-toolbox
 */
final class TemporaryFileCachedRemoteGetRequest implements RemoteGetRequest
{

    /**
     * Prefix to use to identify cached file.
     *
     * @var string
     */
    const CACHED_FILE_PREFIX = 'amp-remote-request-';

    /**
     * Cache control header directive name.
     *
     * @var string
     */
    const CACHE_CONTROL = 'Cache-Control';

    /**
     * Default cache expiration time in seconds.
     *
     * The number represents one month time in seconds. It will be used by default for successful requests when
     * the 'cache-control: max-age' was not provided.
     *
     * @var int
     */
    const EXPIRY_TIME = 2592000;

    /**
     * The decorated RemoteGetRequest instance.
     *
     * @var RemoteGetRequest
     */
    private $remoteGetRequest;

    /**
     * The directory abspath where the temporary file would be saved.
     *
     * @var string
     */
    private $directory;

    /**
     * The temporary file abspath.
     *
     * @var string
     */
    private $file;

    /**
     * Instantiate a TemporaryFileCachedRemoteGetRequest object.
     *
     * @param RemoteGetRequest $remoteGetRequest The decorated RemoteGetRequest object.
     * @param string           $directory        Optional. The directory abspath where the temp file would be saved.
     */
    public function __construct(RemoteGetRequest $remoteGetRequest, $directory = '')
    {
        $this->remoteGetRequest = $remoteGetRequest;
        $this->directory        = $directory ? $directory : sys_get_temp_dir();
    }

    /**
     * Get the cached request from a temporary file.
     *
     * @param string $url     URL to get.
     * @param array  $headers Optional. Associative array of headers to send with the request. Defaults to empty array.
     * @return Response Response for the executed request.
     * @throws FailedToGetCachedResponse If retrieving the contents from the cache failed.
     */
    public function get($url, $headers = [])
    {
        $filename = self::CACHED_FILE_PREFIX . md5($url . json_encode($headers));

        $this->file = $this->directory . DIRECTORY_SEPARATOR . $filename;

        if (! file_exists($this->file)) {
            return $this->getRemoteResponse($url, $headers);
        }

        $cachedResponse = file_get_contents($this->file);

        if (false !== $cachedResponse) {
            if (PHP_MAJOR_VERSION >= 7) {
                $cachedResponse = unserialize($cachedResponse, [ RemoteGetRequestResponse::class ]);
            } else {
                // PHP 5.6 does not provide the second $options argument yet.
                $cachedResponse = unserialize($cachedResponse);
            }
        }

        if (! $cachedResponse instanceof RemoteGetRequestResponse || $this->isExpired($cachedResponse)) {
            return $this->getRemoteResponse($url, $headers);
        }

        return $cachedResponse;
    }

    /**
     * Get the remote response using the decorated RemoteGetRequest object.
     *
     * @param string $url     URL to get.
     * @param array  $headers Associative array of headers to send with the request.
     * @return Response Response for the executed request.
     */
    private function getRemoteResponse($url, $headers)
    {
        try {
            $response = $this->remoteGetRequest->get($url, $headers);
            $this->cacheResponse($response);
            return $response;
        } catch (Exception $error) {
            throw FailedToGetCachedResponse::withUrl($url);
        }
    }

    /**
     * Save the response in temporary file.
     *
     * @param Response $response The response that need to be cached.
     */
    private function cacheResponse(Response $response)
    {
        file_put_contents($this->file, serialize($response));
    }

    /**
     * Check whether the request is expired.
     *
     * @param RemoteGetRequestResponse $response The response that need to be checked.
     * @return bool
     */
    private function isExpired(RemoteGetRequestResponse $response)
    {
        $expiry = $this->getExpiryTime($response);

        return microtime(true) > $expiry->getTimestamp();
    }

    /**
     * Calculate the expiry time.
     *
     * @param RemoteGetRequestResponse $response The response data need to be calculated.
     *
     * @return DateTimeImmutable Cache expiry time object.
     */
    private function getExpiryTime(RemoteGetRequestResponse $response)
    {
        $expiry           = self::EXPIRY_TIME;
        $fileModifiedTime = (new DateTimeImmutable())->setTimestamp(filemtime($this->file));

        if ($response->hasHeader(self::CACHE_CONTROL)) {
            $maxAge = $this->getMaxAge($response->getHeader(self::CACHE_CONTROL));
            $expiry = ($maxAge >= 0) ? $maxAge : $expiry;
        }

        return $fileModifiedTime->modify("{$expiry} sec");
    }

    /**
     * Extract the max-age from response header.
     *
     * @param array $cache_control_strings Cache-Control header value.
     * @return int The max-age value of the Cache-Control header.
     */
    private function getMaxAge($cache_control_strings)
    {
        $max_age = -1;

        foreach ((array) $cache_control_strings as $cache_control_string) {
            $cache_control_parts = array_map('trim', explode(',', $cache_control_string));

            foreach ($cache_control_parts as $cache_control_part) {
                $cache_control_setting_parts = array_map('trim', explode('=', $cache_control_part));

                if (count($cache_control_setting_parts) !== 2) {
                    continue;
                }

                if ('max-age' === $cache_control_setting_parts[0]) {
                    $max_age = abs((int)$cache_control_setting_parts[1]);
                }
            }
        }

        return $max_age;
    }
}
