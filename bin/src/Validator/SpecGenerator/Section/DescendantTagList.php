<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\VariableDumping;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class DescendantTagList implements Section
{
    use ConstantNames;
    use VariableDumping;

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
        $propertyName = lcfirst($class->getName());

        $namespace->addUse('AmpProject\\Extension');
        $namespace->addUse('AmpProject\\Tag', 'Element');
        $namespace->addUse('AmpProject\\Internal');

        $class->addProperty($propertyName)
              ->addComment('@var array');

        $constructor = $class->addMethod('__construct');
        $constructor->addBody('$this->? = [', [$propertyName]);

        foreach ($spec as $data) {
            $key = $data['name'];
            $tags = [];
            foreach ($data['tag'] as $tag) {
                $tags[] = $this->getTagConstant($this->getConstantName($tag));
            }
            $constructor->addBody("    '{$key}' => {$this->dump($tags, 1, [$this, 'filterValueStrings'])}");
        }

        $constructor->addBody('];');
    }
}
