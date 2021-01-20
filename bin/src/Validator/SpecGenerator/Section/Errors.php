<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\VariableDumping;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class Errors implements Section
{
    use ConstantNames;
    use VariableDumping;

    /**
     * Process a section.
     *
     * @param FileManager  $fileManager FileManager instance to use.
     * @param array        $spec        Associative array of spec data that was decoded from the JSON file.
     * @param PhpNamespace $namespace   Namespace object of the section.
     * @param ClassType    $class       Class object of the section.
     * @return void
     */
    public function process(FileManager $fileManager, $spec, PhpNamespace $namespace, ClassType $class)
    {
        $propertyName = lcfirst($class->getName());

        $namespace->addUse('AmpProject\\Validator\\ErrorCode');

        $class->addProperty($propertyName)
              ->addComment('@var array');

        $errorData = [];

        foreach ($spec as $key => $value) {
            $key             = $this->getErrorCodeConstant($this->getConstantName($key));
            $errorData[$key] = $value;
        }

        ksort($errorData);

        $constructor = $class->addMethod('__construct');
        $constructor->addBody('$this->? = [', [$propertyName]);

        foreach ($errorData as $key => $value) {
            $constructor->addBody("    {$key} => {$this->dump($value, 1, [$this, 'filterValueStrings'])}");
        }

        $constructor->addBody('];');
    }
}
