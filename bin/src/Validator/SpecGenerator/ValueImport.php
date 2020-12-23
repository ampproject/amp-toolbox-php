<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

trait ValueImport
{

    /** @var array */
    private $data;

    /**
     * Process a section.
     *
     * @param string       $rootNamespace Root namespace to generate the PHP validator spec under.
     * @param array        $spec          Associative array of spec data that was decoded from the JSON file.
     * @param PhpNamespace $namespace     Namespace object of the section.
     * @param ClassType    $class         Class object of the section.
     * @return void
     */
    public function process($rootNamespace, $spec, PhpNamespace $namespace, ClassType $class)
    {
        $this->data   = $spec;
        $propertyName = lcfirst($class->getName());

        $class->addProperty($propertyName)
              ->addComment('@var ' . str_replace('integer', 'int', gettype($spec)));

        $constructor = $class->addMethod('__construct');
        $constructor->addBody('$this->? = ?;', [$propertyName, $spec]);
    }
}
