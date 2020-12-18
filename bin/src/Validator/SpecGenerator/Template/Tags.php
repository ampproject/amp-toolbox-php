<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

final class Tags
{
    private $byTagName  = [];
    private $bySpecName = [];

    /**
     * Get a collection of tags by tag name.
     *
     * @param string $tagName Tag name to get the collection of tags for.
     * @return array<Tag> Array of tags. Empty array if tag name not found.
     */
    public function byTagName($tagName)
    {
        if (!array_key_exists($tagName, $this->byTagName)) {
            return [];
        }

        return $this->byTagName[$tagName];
    }

    /**
     * Get a collection of tags by spec name.
     *
     * @param string $specName Spec name to get the collection of tags for.
     * @return array<Tag> Array of tags. Empty array if spec name not found.
     */
    public function bySpecName($specName)
    {
        if (!array_key_exists($specName, $this->bySpecName)) {
            return [];
        }

        return $this->byTagName[$specName];
    }
}
