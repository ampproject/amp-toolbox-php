<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

class DescendantTagList
{

    /**
     * ID of the descendant tag list.
     *
     * This needs to be overridden in the extending class.
     *
     * @var string
     */
    const ID = '[descendant tag list base class]';

    /**
     * Array of descendant tags.
     *
     * @var array<string>
     */
    const DESCENDANT_TAGS = [];

    /**
     * Get the ID of the descendant tag list.
     *
     * @return string ID of the descendant tag list.
     */
    public function getId()
    {
        return static::ID;
    }

    /**
     * Check whether a given descendant tag is contained within the list.
     *
     * @param string $descendantTag Descendant tag to check for.
     * @return bool Whether the given descendant tag is contained within the list.
     */
    public function has($descendantTag)
    {
        return in_array($descendantTag, static::DESCENDANT_TAGS, true);
    }
}
