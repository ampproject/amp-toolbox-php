<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use Countable;
use Iterator;

interface IterableSection extends Iterator, Countable
{

    /**
     * Get the list of available keys.
     *
     * @return array<string> Array of available keys.
     */
    public function getAvailableKeys();

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
    public function findByKey($key);
}
