<?php

namespace AmpProject\Exception;

use OutOfRangeException;

/**
 * Exception thrown when an invalid declaration list name is requested from the validator spec.
 *
 * @package ampproject/amp-toolbox
 */
final class InvalidDeclarationListName extends OutOfRangeException implements AmpException
{

    /**
     * Instantiate an InvalidDeclarationListName exception for a declaration that is not found within the declaration
     * list name index.
     *
     * @param string $declarationListName Declaration list name that was requested.
     * @return self
     */
    public static function forDeclarationListName($declarationListName)
    {
        $message = "Invalid declaration list name '{$declarationListName}' was requested from the validator spec.";

        return new self($message);
    }
}
