<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidSpecRuleName;

class Error
{
    /**
     * Code of the error.
     *
     * This needs to be overridden in the extending class.
     *
     * @var string
     */
    const CODE = '[error base class]';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [];

    /**
     * Get the code of the error.
     *
     * @return string Code of the error.
     */
    public function getCode()
    {
        return static::CODE;
    }

    /**
     * Check whether the error has a given spec rule.
     *
     * @param string $specRule Spec rule to check for.
     * @return bool Whether the error has the given spec rule.
     */
    public function has($specRule)
    {
        return array_key_exists($specRule, static::SPEC);
    }

    /**
     * Get a specific spec rule.
     *
     * @param string $specRuleName Name of the spec rule to get.
     * @return array Spec rule data that was requested.
     */
    public function get($specRuleName)
    {
        if (!$this->has($specRuleName)) {
            throw InvalidSpecRuleName::forSpecRuleName($specRuleName);
        }

        return static::SPEC[$specRuleName];
    }
}
