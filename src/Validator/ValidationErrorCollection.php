<?php

namespace AmpProject\Validator;

use ArrayIterator;
use Countable;
use IteratorAggregate;

/**
 * Collection of ValidationError objects.
 *
 * @package ampproject/amp-toolbox
 */
final class ValidationErrorCollection implements Countable, IteratorAggregate
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
     * Get the iterator for iterating over the collection.
     *
     * @return ArrayIterator Iterator for the contained errors.
     */
    public function getIterator()
    {
        return new ArrayIterator($this->errors);
    }

    /**
     * Count how many errors are contained within the error collection.
     *
     * @return int Number of contained errors.
     */
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
                    if (PHP_MAJOR_VERSION < 7 && $a->getColumn() === $b->getColumn()) {
                        // Hack required for PHP 5.6, as it does not maintain stable order for equal items.
                        // See https://bugs.php.net/bug.php?id=69158.
                        // To get around this, we compare the index within $this->errors instead to maintain existing order.
                        return strcmp(array_search($a, $this->errors, true), array_search($b, $this->errors, true));
                    }

                    return $a->getColumn() - $b->getColumn();
                }

                return $a->getLine() - $b->getLine();
            }
        );
    }
}
