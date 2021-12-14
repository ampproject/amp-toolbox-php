<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidListName;
use AmpProject\Validator\Spec;

/**
 * The DeclarationLists section defines the sets of allowed declarations that can further qualify an object.
 *
 * @package ampproject/amp-toolbox
 *
 * @method DeclarationList parentCurrent()
 */
final class DeclarationLists
{
    /** @var array<array> */
    const DECLARATION_LISTS = [];

    /** @var array<Spec\DeclarationList> */
    private $declarationLists = [];

    /**
     * Get a specific declaration list.
     *
     * @param string $declarationListName Name of the declaration list to get.
     * @return Spec\DeclarationList Declaration list with the given declaration list name.
     * @throws InvalidListName If an invalid declaration list name is requested.
     */
    public function get($declarationListName)
    {
        if (!array_key_exists($declarationListName, self::DECLARATION_LISTS)) {
            throw InvalidListName::forDeclarationList($declarationListName);
        }

        if (array_key_exists($declarationListName, $this->declarationLists)) {
            return $this->declarationLists[$declarationListName];
        }

        $declarationListClassName = self::DECLARATION_LISTS[$declarationListName];

        /** @var Spec\DeclarationList $declarationList */
        $declarationList = new $declarationListClassName();

        $this->declarationLists[$declarationListName] = $declarationList;

        return $declarationList;
    }

    /**
     * Get the list of available keys.
     *
     * @return array<string> Array of available keys.
     */
    public function getAvailableKeys()
    {
        return array_keys(self::DECLARATION_LISTS);
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
     * @return DeclarationList Declaration list object.
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return $this->parentCurrent();
    }
}
