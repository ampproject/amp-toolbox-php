<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidAttributeName;

class AttributeList
{
    /**
     * ID of the attribute list.
     *
     * This needs to be overridden in the extending class.
     *
     * @var string
     */
    const ID = '[attribute list base class]';

    /**
     * Array of attributes.
     *
     * @var array<array>
     */
    const ATTRIBUTES = [];

    /**
     * Check whether a given attribute is contained within the list.
     *
     * @param string $attribute Attribute to check for.
     * @return bool Whether the given attribute is contained within the list.
     */
    public function has($attribute)
    {
        return array_key_exists($attribute, static::ATTRIBUTES);
    }

    /**
     * Get a specific attribute.
     *
     * @param string $attribute Attribute to get.
     * @return array Attribute data that was requested.
     */
    public function get($attribute)
    {
        if (!$this->has($attribute)) {
            throw InvalidAttributeName::forAttribute($attribute);
        }

        return static::ATTRIBUTES[$attribute];
    }
}
