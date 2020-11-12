<?php

namespace AmpProject\Optimizer;

use AmpProject\Dom\Document;
use AmpProject\RemoteGetRequest;
use AmpProject\RemoteRequest\CurlRemoteGetRequest;
use ReflectionClass;
use ReflectionException;

/**
 * Transformation engine that accepts HTML and returns optimized HTML.
 *
 * @package ampproject/optimizer
 */
final class TransformationEngine
{

    /**
     * Internal storage for the configuration settings.
     *
     * @var Configuration
     */
    private $configuration;

    /**
     * Transport to use for remote requests.
     *
     * @var RemoteGetRequest
     */
    private $remoteRequest;

    /**
     * Collection of transformers that were initialized.
     *
     * @var Transformer[]
     */
    private $transformers;

    /**
     * Instantiate a TransformationEngine object.
     *
     * @param Configuration|null    $configuration Optional. Configuration data to use for setting up the transformers.
     * @param RemoteGetRequest|null $remoteRequest Optional. Transport to use for remote requests. Defaults to the
     *                                     CurlRemoteGetRequest implementation shipped with the library.
     */
    public function __construct(Configuration $configuration = null, RemoteGetRequest $remoteRequest = null)
    {
        $this->configuration = isset($configuration) ? $configuration : new Configuration();
        $this->remoteRequest = isset($remoteRequest) ? $remoteRequest : new CurlRemoteGetRequest();

        $this->initializeTransformers();
    }

    /**
     * Apply transformations to the provided DOM document.
     *
     * @param Document        $document DOM document to apply the transformations to.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     * @return void
     */
    public function optimizeDom(Document $document, ErrorCollection $errors)
    {
        foreach ($this->transformers as $transformer) {
            $transformer->transform($document, $errors);
        }
    }

    /**
     * Apply transformations to the provided string of HTML markup.
     *
     * @param string          $html   HTML markup to apply the transformations to.
     * @param ErrorCollection $errors Collection of errors that are collected during transformation.
     * @return string Optimized HTML string.
     */
    public function optimizeHtml($html, ErrorCollection $errors)
    {
        $dom = Document::fromHtml($html);
        $this->optimizeDom($dom, $errors);

        return $dom->saveHTML();
    }

    /**
     * Initialize the array of transformers to use.
     */
    private function initializeTransformers()
    {
        $this->transformers = [];

        foreach ($this->configuration->get(Configuration::KEY_TRANSFORMERS) as $transformerClass) {
            $this->transformers[$transformerClass] = new $transformerClass(
                ...$this->getTransformerDependencies($transformerClass)
            );
        }
    }

    /**
     * Get the dependencies of a transformer and put them in the correct order.
     *
     * @param string $transformerClass Class of the transformer to get the dependencies for.
     * @return array Array of dependencies in the order as they appear in the transformer's constructor.
     * @throws ReflectionException If the transformer could not be reflected upon.
     */
    private function getTransformerDependencies($transformerClass)
    {
        $constructor = (new ReflectionClass($transformerClass))->getConstructor();

        if ($constructor === null) {
            return [];
        }

        $dependencies = [];
        foreach ($constructor->getParameters() as $parameter) {
            $dependencyType = $parameter->getClass();

            if ($dependencyType === null) {
                // No type provided, so we pass `null` in the hopes that the argument is optional.
                $dependencies[] = null;
                continue;
            }

            if (is_a($dependencyType->name, TransformerConfiguration::class, true)) {
                $dependencies[] = $this->configuration->getTransformerConfiguration($transformerClass);
                continue;
            }

            if (is_a($dependencyType->name, RemoteGetRequest::class, true)) {
                $dependencies[] = $this->remoteRequest;
                continue;
            }

            // Unknown dependency type, so we pass `null` in the hopes that the argument is optional.
            $dependencies[] = null;
        }

        return $dependencies;
    }
}
