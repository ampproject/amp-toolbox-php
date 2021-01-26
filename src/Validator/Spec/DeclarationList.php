<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidAttributeName;

final class DeclarationList
{
    /**
     * Associative array of declarations.
     *
     * @var array<array>
     */
    private $declarations;

    /**
     * DeclarationList constructor.
     *
     * @param array<array> $declarations Associative array of declarations.
     */
    public function __construct($declarations)
    {
        $this->declarations = $declarations;
    }

    /**
     * Check whether a given declaration is contained within the list.
     *
     * @param string $declaration Declaration to check for.
     * @return bool Whether the given declaration is contained within the list.
     */
    public function has($declaration)
    {
        return array_key_exists($declaration, $this->declarations);
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
            throw InvalidAttributeName::forAttribute($declaration);
        }

        return $this->declarations[$declaration];
    }
}
