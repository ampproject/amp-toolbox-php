<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

trait MagicPropertyAnnotations
{

    /**
     * Get the magic property annotations for a given spec.
     *
     * @param array $spec Spec to get the magic property annotations for.
     * @return string[] Array of magic property annotations.
     */
    private function getMagicPropertyAnnotations($spec)
    {
        $annotations = [];

        foreach ($spec as $key => $value) {
            if (! is_string($key)) {
                continue;
            }

            if (strpos($key, '[') === 0) {
                $key = trim($key, '[]') . '_binding';
            }

            $key = lcfirst(str_replace('-', '', ucwords($key, '-')));

            $type = $this->getPropertyType($value);
            $annotations[] = "@property-read {$type} \${$key}";
        }

        return $annotations;
    }

    /**
     * Get the type of a property by examining its value.
     *
     * @param mixed $value Value to examine to determine the type.
     * @return string Property type.
     */
    private function getPropertyType($value)
    {
        if (is_array($value)) {
            $type = $this->getCommonArrayValueType($value);

            if ($type !== false) {
                return "array<{$type}>";
            }

            return 'array';
        }

        if (is_bool($value)) {
            return 'bool';
        }

        if (is_string($value)) {
            return 'string';
        }

        if (is_int($value)) {
            return 'int';
        }

        if (is_float($value)) {
            return 'float';
        }

        if (is_object($value)) {
            return 'object';
        }

        return 'mixed';
    }

    /**
     * Get the common type for all values of an array.
     *
     * @param array $values Array of values to determine the common type of.
     * @return string|false Common type of the array, or false if it could not be determined.
     */
    private function getCommonArrayValueType($values)
    {
        $commonType = false;

        foreach ($values as $value) {
            $type = $this->getPropertyType($value);

            if ($commonType !== false && $commonType !== $type) {
                return false;
            }

            $commonType = $type;
        }

        return $commonType;
    }
}
