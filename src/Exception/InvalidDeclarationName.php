<?php

namespace AmpProject\Exception;

use OutOfRangeException;

/**
 * Exception thrown when an invalid declaration name is requested from the validator spec.
 *
 * @package ampproject/amp-toolbox
 */
final class InvalidDeclarationName extends OutOfRangeException implements AmpException
{

    /**
     * Instantiate an InvalidDeclarationName exception for a declaration that is not found within the declaration
     * name index.
     *
     * @param string $declarationName Declaration name that was requested.
     * @return self
     */
    public static function forDeclarationName($declarationName)
    {
        $message = "Invalid declaration name '{$declarationName}' was requested from the validator spec.";

        return new self($message);
    }
}
