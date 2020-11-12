<?php

namespace AmpProject\RemoteRequest;

use AmpProject\Exception\FailedRemoteRequest;
use AmpProject\RemoteGetRequest;
use AmpProject\Response;
use Exception;

/**
 * Fallback pipeline implementation to go through a series of fallback requests until a request succeeds.
 *
 * The request will be tried with the first instance provided, and follow the instance series from one to the next until
 * a successful response was returned.
 *
 * A successful response is a response that doesn't return boolean false and doesn't throw an exception.
 *
 * @package ampproject/common
 */
final class FallbackRemoteGetRequest implements RemoteGetRequest
{

    /**
     * Array of RemoteGetRequest instances to churn through.
     *
     * @var RemoteGetRequest[]
     */
    private $pipeline;

    /**
     * Instantiate a FallbackRemoteGetRequest object.
     *
     */
    public function __construct()
    {
        $pipeline = func_get_args();
        array_walk($pipeline, [$this, 'addRemoteGetRequestInstance']);
    }

    /**
     * Add a single RemoteGetRequest instance to the pipeline.
     *
     * This adds strong typing to the variadic $pipeline argument in the constructor.
     *
     * @param RemoteGetRequest $remoteGetRequest
     */
    private function addRemoteGetRequestInstance(RemoteGetRequest $remoteGetRequest)
    {
        $this->pipeline[] = $remoteGetRequest;
    }

    /**
     * Do a GET request to retrieve the contents of a remote URL.
     *
     * @param string $url URL to get.
     * @return Response Response for the executed request.
     * @throws FailedRemoteRequest If retrieving the contents from the URL failed.
     */
    public function get($url)
    {
        foreach ($this->pipeline as $remoteGetRequest) {
            try {
                $response   = $remoteGetRequest->get($url);
                $statusCode = $response->getStatusCode();

                if (200 <= $statusCode && $statusCode < 300) {
                    return $response;
                }
            } catch (Exception $exception) {
                // Don't let exceptions bubble up, just continue with the next instance in the pipeline.
            }
        }

        // @todo Not sure what status code to use here. "503 Service Unavailable" is a temporary server-side error.
        return new RemoteGetRequestResponse('', [], 503);
    }
}
