<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

interface Section
{

    /**
     * Process a section.
     *
     * @param string       $rootNamespace Root namespace to generate the PHP validator spec under.
     * @param array        $spec          Associative array of spec data that was decoded from the JSON file.
     * @param PhpNamespace $namespace     Namespace object of the section.
     * @param ClassType    $class         Class object of the section.
     * @return void
     */
    public function process($rootNamespace, $spec, PhpNamespace $namespace, ClassType $class);
}
