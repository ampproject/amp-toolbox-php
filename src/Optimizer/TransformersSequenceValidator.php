<?php

namespace AmpProject\Optimizer;

use AmpProject\Optimizer\Exception\InvalidTransformersSequence;

class TransformersSequenceValidator
{

    /**
     * @param string[] $transformers
     */
    public static function validate(array $transformers)
    {
        $providedTags = [];
        foreach (array_values($transformers) as $transformerClass) {
            if ($transformerClass instanceof TransformerRequires) {
                $missingTags = array_diff($transformerClass::requires(), $providedTags);
                if ($missingTags) {
                    throw InvalidTransformersSequence::forTransformer($transformerClass, $missingTags);
                }
            }

            if ($transformerClass instanceof TransformerProvides) {
                $providedTags = array_merge($providedTags, $transformerClass::provides());
            }
        }
    }
}
