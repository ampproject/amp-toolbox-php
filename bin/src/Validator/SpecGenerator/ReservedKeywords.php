<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

final class ReservedKeywords
{

    /**
     * List of reserved keywords.
     *
     * @var array<string>
     */
    const PHP_KEYWORDS = [
        'AS',
        'DEFAULT',
        'FOR',
        'LIST',
        'SWITCH',
        'USE',
        'VAR',
    ];

    /**
     * Add a suffix to a value in case it is a reserved keyword.
     *
     * @param string $value  Value to maybe add a suffix to.
     * @param string $suffix Optional. Suffix to add. Defaults to an underscore ('_').
     * @return string Adapted value.
     */
    public function maybeAddSuffix($value, $suffix = '_')
    {
        if (in_array(strtoupper($value), self::PHP_KEYWORDS, true)) {
            return "{$value}{$suffix}";
        }

        return $value;
    }
}
