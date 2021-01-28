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
        return $versions[count($versions) - 1];
    }
}
