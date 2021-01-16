<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Amp;
use AmpProject\Exception\InvalidCssRulesName;
use AmpProject\Exception\InvalidFormat;

final class CssRules
{
    /** @var array<array> */
    private $cssRules = [];

    /** @var array<string,array> */
    private $byFormat = [];

    /**
     * Get the CSS rules for a given name.
     *
     * @param string $name Format to get the CSS rules for.
     * @return array CSS rule set.
     */
    public function getByName($name)
    {
        if (!array_key_exists($name, $this->cssRules)) {
            throw InvalidCssRulesName::forCssRulesName($name);
        }

        return $this->cssRules[$name];
    }

    /**
     * Get the CSS rules for a given format.
     *
     * @param string $format Format to get the CSS rules for.
     * @return array Array of CSS rule sets.
     */
    public function getByFormat($format)
    {
        if (!in_array($format, Amp::FORMATS, true)) {
            throw InvalidFormat::forFormat($format);
        }

        if (!array_key_exists($format, $this->byFormat)) {
            return [];
        }

        return $this->byFormat[$format];
    }
}
