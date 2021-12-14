<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidExtension;
use AmpProject\Exception\InvalidFormat;
use AmpProject\Exception\InvalidSpecName;
use AmpProject\Exception\InvalidTagId;
use AmpProject\Exception\InvalidTagName;
use AmpProject\Validator\Spec\AggregateTag;
use AmpProject\Validator\Spec\AggregateTagWithExtensionSpec;
use AmpProject\Validator\Spec\Tag;
use AmpProject\Validator\Spec\TagWithExtensionSpec;
use LogicException;

/**
 * The Tags section gives access to all of the validation rules are are specific to an HTML element.
 *
 * @package ampproject/amp-toolbox
 *
 * @method Tag parentCurrent()
 */
final class Tags
{
    const TAGS = [];

    const BY_TAG_NAME       = [];
    const BY_SPEC_NAME      = [];
    const BY_FORMAT         = [];
    const BY_EXTENSION_SPEC = [];

    /**
     * Cache of already instantiated Tag objects.
     *
     * @var \AmpProject\Validator\Spec\Tag[]
     */
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
     * Get a tag by aggregating all tag specs that match a tag name.
     *
     * This returns a singular Tag instance if only one tag entry matches.
     *
     * If more tag entries match, it provides an AggregateTag instance that transparently represents all of them.
     *
     * @param string $tagName Tag name to get the aggregated tag for.
     * @return Tag Tag object that matches the tag name.
     */
    public function byAggregateTagName($tagName)
    {
        $tags = $this->byTagName($tagName);

        switch (count($tags)) {
            case 0:
                throw InvalidTagName::forTagName($tagName);
            case 1:
                return $tags[0];
            default:
                $withExtensionSpec = true;

                foreach ($tags as $tag) {
                    if (! $tag instanceof TagWithExtensionSpec) {
                        $withExtensionSpec = false;
                    }
                }

                if ($withExtensionSpec) {
                    /** @var TagWithExtensionSpec[] $tags */
                    return new AggregateTagWithExtensionSpec($tags);
                }

                return new AggregateTag($tags);
        }
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
     * @throws InvalidFormat If an invalid AMP HTML format is requested.
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
     * Get the collection of tags for a given extension spec name.
     *
     * @param string $extension Extension name to get the extension spec for.
     * @return TagWithExtensionSpec[] Tags with the given extension spec name.
     * @throws LogicException If tag is not an instance of TagWithExtensionSpec.
     */
    public function byExtensionSpec($extension)
    {
        $extension = strtolower($extension);

        if (!array_key_exists($extension, self::BY_EXTENSION_SPEC)) {
            return [];
        }

        $tagIds = self::BY_EXTENSION_SPEC[$extension];
        if (!is_array($tagIds)) {
            $tagIds = [$tagIds];
        }

        $tags = [];
        foreach ($tagIds as $tagId) {
            $tag = $this->byTagId($tagId);

            if (! $tag instanceof TagWithExtensionSpec) {
                throw new LogicException('Tags::byExtensionSpec returned tag without extension spec');
            }

            $tags[] = $tag;
        }

        return $tags;
    }

    /**
     * Get a tag by aggregating all tag specs that match an extension spec.
     *
     * This returns a singular Tag instance if only one tag entry matches.
     *
     * If more tag entries match, it provides an AggregateTag instance that transparently represents all of them.
     *
     * @param string $extension Extension spec to get the aggregated tag for.
     * @return TagWithExtensionSpec Tag object that matches the extension spec.
     */
    public function byAggregateExtensionSpec($extension)
    {
        $tags = $this->byExtensionSpec($extension);

        switch (count($tags)) {
            case 0:
                throw InvalidExtension::forExtension($extension);
            case 1:
                return $tags[0];
            default:
                foreach ($tags as $tag) {
                    if (! $tag instanceof TagWithExtensionSpec) {
                        throw new LogicException('Tags::byExtensionSpec returned tag without extension spec');
                    }
                }

                return new AggregateTagWithExtensionSpec($tags);
        }
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

    /**
     * Get the list of available keys.
     *
     * @return array<string> Array of available keys.
     */
    public function getAvailableKeys()
    {
        return array_keys(self::TAGS);
    }

    /**
     * Find the instantiated object for the current key.
     *
     * This should use its own caching mechanism as needed.
     *
     * Ideally, current() should be overridden as well to provide the correct object type-hint.
     *
     * @param string $key Key to retrieve the instantiated object for.
     * @return object Instantiated object for the current key.
     */
    public function findByKey($key)
    {
        return $this->byTagId($key);
    }

    /**
     * Return the current iterable object.
     *
     * @return Tag Tag object.
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return $this->parentCurrent();
    }
}
