<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec;

use AmpProject\Html\Attribute;
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
     * @todo This will need to be adapted to be informed by <https://github.com/ampproject/amphtml/blob/main/build-system/compile/bundles.config.extensions.json>, where the latestVersion is stored with the spec (and the highest version is not always the same as latest), as well as any additional Bento metadata.
     * @return string Latest available version.
     */
    public function getLatestVersion()
    {
        if (! array_key_exists(SpecRule::VERSION, self::EXTENSION_SPEC)) {
            return 'latest';
        }

        $versions = self::EXTENSION_SPEC[SpecRule::VERSION];

        // @todo Why isn't this sorting done at ingestion time? Then getLatestVersion could just be doing something like `return self::LATEST_VERSION`.
        // Sort versions in descending order so that the latest version ends up to be the first element in the array.
        usort(
            $versions,
            static function ($a, $b) {
                if ($a === $b) {
                    return 0;
                }

                if ($a === 'latest') {
                    return 1;
                }

                if ($b === 'latest') {
                    return -1;
                }

                return version_compare($a, $b, '<');
            }
        );

        return $versions[0];
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
