<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidAttributeName;

final class AttributeList
{

    /**
     * Associative array of attributes.
     *
     * @var array<array>
     */
    private $attributes;

    /**
     * AttributeList constructor.
     *
     * @param array<array> $attributes Associative array of attributes.
     */
    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * Check whether a given attribute is contained within the list.
     *
     * @param string $attribute Attribute to check for.
     * @return bool Whether the given attribute is contained within the list.
     */
    public function has($attribute)
    {
        return array_key_exists($attribute, $this->attributes);
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

        return $this->attributes[$attribute];
    }
}
