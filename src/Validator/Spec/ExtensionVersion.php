<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec;

trait ExtensionVersion
{
    /**
     * Get the latest available version of the extension.
     *
     * @return string Latest available version.
     */
    public function getLatestVersion()
    {
        $versions = self::EXTENSION_SPEC['version'];

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
}
