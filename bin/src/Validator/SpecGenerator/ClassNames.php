<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

trait ClassNames
{
    /**
     * Get a valid PHP class name from an ID string.
     *
     * @param string $id ID to get a valid PHP class name from.
     * @return string Valid PHP class name.
     */
    protected function getClassNameFromId($id)
    {
        $className = str_replace(
            ['(', ')', '[', ']', '-', '=', '>', '.', '_', '/', '*', ':', '+', '$'],
            ' ',
            $id
        );
        $className = preg_replace('/\s+/', ' ', trim($className));
        $className = str_replace(' ', '', ucwords(strtolower($className)));

        $className = (new ReservedKeywords())->maybeAddSuffix($className);

        return $className;
    }

    /**
     * Get the short name for a provided class name.
     *
     * @param string $class Class name to get the short name for.
     * @return string Short name of the provided class name.
     */
    private function getShortName($class)
    {
        $class = ltrim($class, '\\');

        if (strpos($class, 'AmpProject\\') === 0) {
            $partials = array_filter(explode('\\', $class));
            $class    = array_pop($partials);
        }

        return $class;
    }
}
