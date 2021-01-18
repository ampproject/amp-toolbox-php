<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidFormat;
use AmpProject\Exception\InvalidSpecName;

final class Tags
{
    private $byTagName  = [];
    private $bySpecName = [];
    private $byFormat   = [];

    /**
     * Get a collection of tags by tag name.
     *
     * @param string $tagName Tag name to get the collection of tags for.
     * @return array<Tag> Array of tags. Empty array if tag name not found.
     */
    public function byTagName($tagName)
    {
        $tagName = strtolower($tagName);

        if (!array_key_exists($tagName, $this->byTagName)) {
            return [];
        }

        $tags = $this->byTagName[$tagName];
        return is_array($tags) ? $tags : [$tags];
    }

    /**
     * Get the tag for a given spec name.
     *
     * @param string $specName Spec name to get the tag for.
     * @return Tag Tag with the given spec name.
     * @throws InvalidSpecName If an invalid spec name is requested.
     */
    public function bySpecName($specName)
    {
        if (!array_key_exists($specName, $this->bySpecName)) {
            throw InvalidSpecName::forSpecName($specName);
        }

        return $this->bySpecName[$specName];
    }

    /**
     * Get a collection of tags for a given AMP HTML format name.
     *
     * @param string $format AMP HTML format to get the tags for.
     * @return array<Tag> Array of tags matching the requested AMP HTML format.
     * @throws InvalidSpecName If an invalid AMP HTML format is requested.
     */
    public function byFormat($format)
    {
        if (!array_key_exists($format, $this->byFormat)) {
            throw InvalidFormat::forFormat($format);
        }

        $tags = $this->byFormat[$format];
        return is_array($tags) ? $tags : [$tags];
    }
}
