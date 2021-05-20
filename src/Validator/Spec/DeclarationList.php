<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidDeclarationName;

class DeclarationList
{
    /** @var array<array> */
    const DECLARATIONS = [];

    /**
     * Check whether a given declaration is contained within the list.
     *
     * @param string $declaration Declaration to check for.
     * @return bool Whether the given declaration is contained within the list.
     */
    public function has($declaration)
    {
        return array_key_exists($declaration, static::DECLARATIONS);
    }

    /**
     * Get a specific declaration.
     *
     * @param string $declaration Declaration to get.
     * @return array Declaration data that was requested.
     */
    public function get($declaration)
    {
        if (!$this->has($declaration)) {
            throw InvalidDeclarationName::forDeclaration($declaration);
        }

        return static::DECLARATIONS[$declaration];
    }
}
