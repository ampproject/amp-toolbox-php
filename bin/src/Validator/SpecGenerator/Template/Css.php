<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Amp;
use AmpProject\Exception\InvalidCssName;
use AmpProject\Exception\InvalidFormat;

final class Css
{
    /** @var array<array> */
    private $css = [];

    /** @var array<string,array> */
    private $byFormat = [];

    /**
     * Get the CSS spec for a given name.
     *
     * @param string $name Format to get the CSS spec for.
     * @return array CSS rule set.
     */
    public function getByName($name)
    {
        if (!array_key_exists($name, $this->css)) {
            throw InvalidCssName::forCssName($name);
        }

        return $this->css[$name];
    }

    /**
     * Get the CSS spec for a given format.
     *
     * @param string $format Format to get the CSS spec for.
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
