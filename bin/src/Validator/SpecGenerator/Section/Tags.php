<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\Section;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Dumper;
use Nette\PhpGenerator\PhpNamespace;

final class Tags implements Section
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
    public function process($rootNamespace, $spec, PhpNamespace $namespace, ClassType $class)
    {
        $namespace->addUse("{$rootNamespace}\\Spec\\Tag");

        $class->addProperty('tags')
              ->setValue([])
              ->setPrivate();

        $constructor = $class->addMethod('__construct');

        foreach ($spec as $attributes) {
            $constructor->addBody('$this->tags[] = new Tag(');
            $constructor->addBody('    [');
            foreach ($attributes as $key => $attribute) {
                $constructor->addBody("        '{$key}' => {$this->dump($attribute, 2)},");
            }
            $constructor->addBody('    ]');
            $constructor->addBody(');');
        }
    }

    private function dump($variable, $level)
    {
        $dumper = new Dumper();
        $extraIndentation = str_pad('', $level * 4, ' ');
        return str_replace("\n", "\n{$extraIndentation}", $dumper->dump($variable));
    }
}
