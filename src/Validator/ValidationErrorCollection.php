<?php

namespace AmpProject\Validator;

use Countable;
use Iterator;

/**
 * Collection of ValidationError objects.
 *
 * @package ampproject/amp-toolbox
 */
final class ValidationErrorCollection implements Countable, Iterator
{
    /**
     * Internal storage for the errors that were added.
     *
     * @var ValidationError[]
     */
    private $errors = [];

    /**
     * Add an error to the error collection.
     *
     * @param ValidationError $error Error to add.
     * @return void
     */
    public function add(ValidationError $error) // phpcs:ignore PHPCompatibility.Classes.NewClasses.errorFound
    {
        $this->errors[] = $error;
    }

    /**
     * Check whether the error collection contains an error for the given code.
     *
     * @param string $code Code of the error.
     * @return bool Whether the error collection contains an error with the given code.
     */
    public function has($code)
    {
        foreach ($this->errors as $error) {
            if ($error->getCode() === $code) {
                return true;
            }
        }

        return false;
    }

    /**
     * Count how many errors are contained within the error collection.
     *
     * @return int Number of contained errors.
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->errors);
    }

    /**
     * Sort errors by their position in the file.
     */
    public function sortByPosition()
    {
        usort(
            $this->errors,
            function (ValidationError $a, ValidationError $b) {
                if ($a->getLine() === $b->getLine()) {
                    return $a->getColumn() - $b->getColumn();
                }

                return $a->getLine() - $b->getLine();
            }
        );
    }

    /**
     * Return the current validation error.
     *
     * @return ValidationError Current validation error.
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->errors);
    }

    /**
     * Move forward to next validation error.
     *
     * @return void Any returned value is ignored.
     */
    #[\ReturnTypeWillChange]
    public function next()
    {
        next($this->errors);
    }

    /**
     * Return the key of the current validation error.
     *
     * @return string|int|null Scalar on success, or null on failure.
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->errors);
    }

    /**
     * Checks if current position is valid.
     *
     * @return bool Whether the current position is valid.
     */
    #[\ReturnTypeWillChange]
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Rewind the iterator to the first validation error.
     *
     * @return void Any returned value is ignored.
     */
    #[\ReturnTypeWillChange]
    public function rewind()
    {
        reset($this->errors);
    }
}
