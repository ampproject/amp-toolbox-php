<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

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
