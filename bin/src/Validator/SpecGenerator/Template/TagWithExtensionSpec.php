<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

interface TagWithExtensionSpec
{

    /**
     * Get the latest available version of the extension.
     *
     * @return string Latest available version.
     */
    public function getLatestVersion();
}
