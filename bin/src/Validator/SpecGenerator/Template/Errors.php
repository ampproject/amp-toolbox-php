<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidErrorCode;
use AmpProject\Validator\Spec;

/**
 * The Errors section gives access to all the known validation errors.
 *
 * @package ampproject/amp-toolbox
 *
 * @method Error parentCurrent()
 */
final class Errors
{
    /** @var array<array> */
    const ERRORS = [];

    /** @var array<Spec\Error> */
    private $errors = [];

    /**
     * Get a specific error.
     *
     * @param string $errorCode Code of the error to get.
     * @return Spec\Error Error with the given error code.
     * @throws InvalidErrorCode If an invalid error code is requested.
     */
    public function get($errorCode)
    {
        if (!array_key_exists($errorCode, self::ERRORS)) {
            throw InvalidErrorCode::forErrorCode($errorCode);
        }

        if (array_key_exists($errorCode, $this->errors)) {
            return $this->errors[$errorCode];
        }

        $errorClassName = self::ERRORS[$errorCode];

        /** @var Spec\Error $error */
        $error = new $errorClassName();

        $this->errors[$errorCode] = $error;

        return $error;
    }

    /**
     * Get the list of available keys.
     *
     * @return array<string> Array of available keys.
     */
    public function getAvailableKeys()
    {
        return array_keys(self::ERRORS);
    }

    /**
     * Find the instantiated object for the current key.
     *
     * This should use its own caching mechanism as needed.
     *
     * Ideally, current() should be overridden as well to provide the correct object type-hint.
     *
     * @param string $key Key to retrieve the instantiated object for.
     * @return object Instantiated object for the current key.
     */
    public function findByKey($key)
    {
        return $this->get($key);
    }

    /**
     * Return the current iterable object.
     *
     * @return Error Error object.
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return $this->parentCurrent();
    }
}
