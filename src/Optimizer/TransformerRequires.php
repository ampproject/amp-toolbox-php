<?php

namespace AmpProject\Optimizer;

interface TransformerRequires
{

    /**
     * Return the collection of dependencies that this transformer requires.
     *
     * @return string[]
     */
    public static function requires();
}
