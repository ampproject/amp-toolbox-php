<?php

namespace AmpProject\Exception;

use OutOfRangeException;

/**
 * Exception thrown when an invalid CSS rules name is requested from the validator spec.
 *
 * @package ampproject/amp-toolbox
 */
final class InvalidCssRulesName extends OutOfRangeException implements AmpException
{

    /**
     * Instantiate an InvalidCssRulesName exception for a spec that is not found within the CSS rules name index.
     *
     * @param string $cssRulesName CSS rules name that was requested.
     * @return self
     */
    public static function forCssRulesName($cssRulesName)
    {
        $message = "Invalid cssRules name '{$cssRulesName}' was requested from the validator spec.";

        return new self($message);
    }
}
