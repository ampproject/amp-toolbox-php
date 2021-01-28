<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidExtension;
use AmpProject\Exception\InvalidFormat;
use AmpProject\Exception\InvalidSpecName;
use AmpProject\Exception\InvalidTagId;

final class Tags
{
    const TAGS = [];

    const BY_TAG_NAME       = [];
    const BY_SPEC_NAME      = [];
    const BY_FORMAT         = [];
    const BY_EXTENSION_SPEC = [];

    private $tagsCache = [];

    /**
     * Get a collection of tags by tag name.
     *
     * @param string $tagName Tag name to get the collection of tags for.
     * @return array<Tag> Array of tags. Empty array if tag name not found.
     */
    public function byTagName($tagName)
    {
        $tagName = strtolower($tagName);

        if (!array_key_exists($tagName, self::BY_TAG_NAME)) {
            return [];
        }

        $tagIds = self::BY_TAG_NAME[$tagName];
        if (!is_array($tagIds)) {
            $tagIds = [$tagIds];
        }

        $tags = [];
        foreach ($tagIds as $tagId) {
            $tags[] = $this->byTagId($tagId);
        }

        return $tags;
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
        if (!array_key_exists($specName, self::BY_SPEC_NAME)) {
            throw InvalidSpecName::forSpecName($specName);
        }

        return $this->byTagId(self::BY_SPEC_NAME[$specName]);
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
        if (!array_key_exists($format, self::BY_FORMAT)) {
            throw InvalidFormat::forFormat($format);
        }

        $tagIds = self::BY_FORMAT[$format];
        if (!is_array($tagIds)) {
            $tagIds = [$tagIds];
        }

        $tags = [];
        foreach ($tagIds as $tagId) {
            $tags[] = $this->byTagId($tagId);
        }

        return $tags;
    }

    /**
     * Get the tag for a given extension spec name.
     *
     * @param string $extension Extension name to get the extension spec for.
     * @return Tag Tag with the given extension spec name.
     * @throws InvalidExtension If an invalid extension name is requested.
     */
    public function byExtensionSpec($extension)
    {
        if (!array_key_exists($extension, self::BY_EXTENSION_SPEC)) {
            throw InvalidExtension::forExtension($extension);
        }

        return $this->byTagId(self::BY_EXTENSION_SPEC[$extension]);
    }

    /**
     * Get a tag by its tag ID.
     *
     * @param string $tagId Tag ID for which to get the tag.
     * @return Tag Tag object.
     */
    public function byTagId($tagId)
    {
        if (array_key_exists($tagId, $this->tagsCache)) {
            return $this->tagsCache[$tagId];
        }

        if (!array_key_exists($tagId, self::TAGS)) {
            throw InvalidTagId::forTagId($tagId);
        }

        $tagClassName = self::TAGS[$tagId];
        $tag          = new $tagClassName();

        $this->tagsCache[$tagId] = $tag;

        return $tag;
    }
}
