<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

trait ArrayKeyFirstPolyfill
{

    /**
     * Get the first key of an array.
     *
     * This is used as a polyfill as the PHP array_key_first() function was only introduced with PHP 7.3+.
     *
     * @param array $arr Array to get the first key for.
     * @return int|string|null First key of the array, or null if no element found within the array.
     */
    private function arrayKeyFirst($arr)
    {
        foreach ($arr as $key => $unused) {
            return $key;
        }

        return null;
    }
}
