<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidListName;
use AmpProject\Validator\Spec;

/**
 * The DescendantTagLists section provides lists that define the set of allowed descendant tags.
 *
 * @package ampproject/amp-toolbox
 */
final class DescendantTagLists
{

    /** @var array<array> */
    const DESCENDANT_TAG_LISTS = [];

    /** @var array<Spec\DescendantTagList> */
    private $descendantTagLists = [];

    /**
     * Get a specific descendantTag list.
     *
     * @param string $descendantTagListName Name of the descendant tag list to get.
     * @return Spec\DescendantTagList Descendant tag list with the given descendant tag list name.
     * @throws InvalidListName If an invalid descendant tag list name is requested.
     */
    public function get($descendantTagListName)
    {
        if (!array_key_exists($descendantTagListName, self::DESCENDANT_TAG_LISTS)) {
            throw InvalidListName::forDescendantTagList($descendantTagListName);
        }

        if (array_key_exists($descendantTagListName, $this->descendantTagLists)) {
            return $this->descendantTagLists[$descendantTagListName];
        }

        $descendantTagListClassName = self::DESCENDANT_TAG_LISTS[$descendantTagListName];

        /** @var Spec\DescendantTagList $descendantTagList */
        $descendantTagList = new $descendantTagListClassName();

        $this->descendantTagLists[$descendantTagListName] = $descendantTagList;

        return $descendantTagList;
    }

    /**
     * Get the list of available keys.
     *
     * @return array<string> Array of available keys.
     */
    public function getAvailableKeys()
    {
        return array_keys(self::DESCENDANT_TAG_LISTS);
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
     * @return DescendantTagList Descendant tag list object.
     */
    public function current()
    {
        return $this->parentCurrent();
    }
}
