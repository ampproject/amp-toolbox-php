<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidListName;
use AmpProject\Validator\Spec;

final class AttributeLists
{

    /** @var array<array> */
    const ATTRIBUTE_LISTS = [];

    /** @var array<Spec\AttributeList> */
    private $attributeLists = [];

    /**
     * Get a specific attribute list.
     *
     * @param string $attributeListName Name of the attribute list to get.
     * @return Spec\AttributeList Attribute list with the given attribute list name.
     * @throws InvalidListName If an invalid attribute list name is requested.
     */
    public function get($attributeListName)
    {
        if (!array_key_exists($attributeListName, self::ATTRIBUTE_LISTS)) {
            throw InvalidListName::forAttributeList($attributeListName);
        }

        if (array_key_exists($attributeListName, $this->attributeLists)) {
            return $this->attributeLists[$attributeListName];
        }

        $attributeListClassName = self::ATTRIBUTE_LISTS[$attributeListName];

        /** @var Spec\AttributeList $attributeList */
        $attributeList = new $attributeListClassName();

        $this->attributeLists[$attributeListName] = $attributeList;

        return $attributeList;
    }

    /**
     * Get the list of available keys.
     *
     * @return array<string> Array of available keys.
     */
    public function getAvailableKeys()
    {
        return array_keys(self::ATTRIBUTE_LISTS);
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
     * @return AttributeList Attribute list object.
     */
    public function current()
    {
        return $this->parentCurrent();
    }
}
