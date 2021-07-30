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
        if (! array_key_exists(SpecRule::NAME, self::EXTENSION_SPEC)) {
            return 'unknown';
        }

        return self::EXTENSION_SPEC[SpecRule::NAME];
    }

    /**
     * Get the latest available version of the extension.
     *
     * phpcs:disable Generic.Files.LineLength.TooLong
     * @return string Latest available version.
     */
    public function getLatestVersion()
    {
        return self::LATEST_VERSION;
    }

    /**
     * Get the type of the extension.
     *
     * @return string Extension type.
     */
    public function getExtensionType()
    {
        if (! array_key_exists(SpecRule::EXTENSION_TYPE, self::EXTENSION_SPEC)) {
            return Attribute::CUSTOM_ELEMENT;
        }

        return str_replace('_', '-', strtolower(self::EXTENSION_SPEC[SpecRule::EXTENSION_TYPE]));
    }
}
