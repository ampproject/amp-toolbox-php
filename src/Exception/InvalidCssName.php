<?php

namespace AmpProject\Exception;

use OutOfRangeException;

/**
 * Exception thrown when an invalid CSS name is requested from the validator spec.
 *
 * @package ampproject/amp-toolbox
 */
final class InvalidCssName extends OutOfRangeException implements AmpException
{

    /**
     * Instantiate an InvalidCssName exception for a spec that is not found within the CSS name index.
     *
     * @param string $cssName CSS name that was requested.
     * @return self
     */
    public static function forCssName($cssName)
    {
        $message = "Invalid css name '{$cssName}' was requested from the validator spec.";

        return new self($message);
    }
}
