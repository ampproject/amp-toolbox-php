<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

trait ArrayImport
{

    /** @var array */
    private $data;

    /**
     * Dumper instance to use.
     *
     * @var Dumper
     */
    private $dumper;

    /**
     * Doc constructor.
     */
    public function __construct()
    {
        $this->dumper = new Dumper();
    }

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
        $this->data   = $this->adaptSpec($spec);
        $propertyName = lcfirst($class->getName());

        $class->addProperty($propertyName)
              ->addComment('@var array');

        $constructor = $class->addMethod('__construct');

        $constructor->addBody('$this->? = [', [$propertyName]);

        foreach ($this->data as $key => $value) {
            if (is_string($key)) {
                $constructor->addBody(
                    "    {$this->dumper->dumpWithKey($key, $value, 1)}"
                );
            } else {
                $constructor->addBody(
                    "    {$this->dumper->dump($value, 1)}"
                );
            }
        }

        $constructor->addBody('];');
    }

    /**
     * Adapt JSON spec data.
     *
     * @param array $jsonSpec JSON spec data to adapt.
     * @return array Adapted JSON spec data.
     */
    protected function adaptSpec($jsonSpec)
    {
        return $jsonSpec;
    }
}
