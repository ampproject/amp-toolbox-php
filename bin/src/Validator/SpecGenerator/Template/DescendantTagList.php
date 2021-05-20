<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

class DescendantTagList
{

    /**
     * @var array<string>
     */
    const DESCENDANT_TAGS = [];

    /**
     * Check whether a given descendant tag is contained within the list.
     *
     * @param string $descendantTag Descendant tag to check for.
     * @return bool Whether the given descendant tag is contained within the list.
     */
    public function has($descendantTag)
    {
        return in_array($descendantTag, static::DESCENDANT_TAGS, true);
    }
}
