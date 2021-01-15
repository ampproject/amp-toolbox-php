<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

trait ErrorCodeImport
{
    use ConstantNames;

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

        $namespace->addUse('AmpProject\\Validator\\ErrorCode');

        $class->addProperty($propertyName)
              ->addComment('@var array');

        $errorData = [];

        foreach ($spec as $entry) {
            $key             = $this->getErrorCodeConstant($this->getConstantName($entry['code']));
            $errorData[$key] = $entry[$this->getValueKey()];
        }

        ksort($errorData);

        $constructor = $class->addMethod('__construct');
        $constructor->addBody('$this->? = [', [$propertyName]);

        foreach ($errorData as $key => $value) {
            $constructor->addBody("    {$key} => {$this->dump($value, 1, [$this, 'filterValueStrings'])}");
        }

        $constructor->addBody('];');
    }

    /**
     * Get the key of the value to import.
     *
     * @return string Value key.
     */
    abstract protected function getValueKey();
}
