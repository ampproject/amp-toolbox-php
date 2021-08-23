<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\SpecRule;

/**
 * Convenience trait to help implement the TagWithExtensionSpec interface.
 *
 * @package ampproject/amp-toolbox
 */
trait ExtensionSpec
{
    /**
     * Get the name of the extension.
     *
     * @return string Extension name.
     */
    public function getExtensionName()
    {
        if (! array_key_exists(SpecRule::NAME, static::EXTENSION_SPEC)) {
            return 'unknown';
        }

        return static::EXTENSION_SPEC[SpecRule::NAME];
    }

    /**
     * Get the latest available version of the extension.
     *
     * @return string Latest available version.
     */
    public function getLatestVersion()
    {
        return static::LATEST_VERSION;
    }

    /**
     * Get the type of the extension.
     *
     * @return string Extension type.
     */
    public function getExtensionType()
    {
        if (! array_key_exists(SpecRule::EXTENSION_TYPE, static::EXTENSION_SPEC)) {
            return Attribute::CUSTOM_ELEMENT;
        }

        return str_replace('_', '-', strtolower(static::EXTENSION_SPEC[SpecRule::EXTENSION_TYPE]));
    }

    /**
     * Get the associative array of versions meta data.
     *
     * @return array
     */
    public function getVersionsMeta()
    {
        return static::VERSIONS_META;
    }
}
