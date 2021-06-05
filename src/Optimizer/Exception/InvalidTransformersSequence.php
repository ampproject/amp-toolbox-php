<?php

namespace AmpProject\Optimizer\Exception;

use DomainException;

/**
 * Exception thrown when an invalid transformer sequence is provided
 * or missed transformer which required by another transformer.
 *
 * @package ampproject/amp-toolbox
 */
final class InvalidTransformersSequence extends DomainException implements AmpOptimizerException
{

    /**
     * @param string $transformerClass
     * @param array  $missingTags
     * @return \AmpProject\Optimizer\Exception\InvalidTransformersSequence
     */
    public static function forTransformer($transformerClass, array $missingTags)
    {
        $tagList = implode(',', $missingTags);
        $message = "Transformer '{$transformerClass}' must be after transformers that provide '{$tagList}' tags.";

        return new self($message);
    }
}
