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
}
