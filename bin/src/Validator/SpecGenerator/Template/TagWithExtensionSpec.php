<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

interface TagWithExtensionSpec
{
    /**
     * Get the name of the extension.
     *
     * @return string Extension name.
     */
    public function getExtensionName();

    /**
     * Get the latest available version of the extension.
     *
     * @return string Latest available version.
     */
    public function getLatestVersion();

    /**
     * Get the type of the extension.
     *
     * @return string Extension type.
     */
    public function getExtensionType();
}
