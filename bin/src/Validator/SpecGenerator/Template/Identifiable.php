<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

/**
 * An element that has an ID that it can return.
 *
 * @package ampproject/amp-toolbox
 */
interface Identifiable
{
    /**
     * Get the ID of the identifiable element.
     *
     * @return string ID of the identifiable element.
     */
    public function getId();
}
