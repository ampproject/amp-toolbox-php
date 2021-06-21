<?php

namespace AmpProject\Optimizer;

interface TransformerProvides
{

    /**
     * Return the collection of dependencies that this transformer provides.
     *
     * @return string[]
     */
    public static function provides();
}
