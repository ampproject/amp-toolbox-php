<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidListName;
use AmpProject\Validator\Spec;

final class AttributeLists
{
    /** @var array<Spec\AttributeList> */
    private $attributes;

    /**
     * Get a specific attribute list.
     *
     * @param string $attributeListName Name of the attribute list to get.
     * @return Spec\AttributeList Attribute list with the given attribute list name.
     * @throws InvalidListName If an invalid attribute list name is requested.
     */
    public function get($attributeListName)
    {
        if (!array_key_exists($attributeListName, $this->attributes)) {
            throw InvalidListName::forAttributeList($attributeListName);
        }

        return $this->attributes[$attributeListName];
    }
}
