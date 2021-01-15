<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use AmpProject\Tooling\Validator\SpecGenerator\VariableDumping;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class DeclarationLists implements Section
{
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
        $namespace->addUse('AmpProject\Exception\InvalidDeclarationListName');
        $namespace->addUse("{$rootNamespace}\\Spec");

        $this->data   = $this->adaptSpec($spec);

        $class->addProperty('declarations')
              ->setPrivate()
              ->addComment('@var array<Spec\DeclarationList>');

        $constructor = $class->addMethod('__construct');

        $constructor->addBody('$this->? = [', ['declarations']);

        foreach ($this->data as $key => $value) {
            $constructor->addBody("    '{$key}' => new Spec\DeclarationList(");
            $constructor->addBody('        [');
            foreach ($value as $subKey => $subValue) {
                $constructor->addBody(
                    "            {$this->dumpWithKey($subKey, $subValue, 3, [$this, 'filterValueStrings'])}"
                );
            }
            $constructor->addBody('        ]');
            $constructor->addBody("    ),");
        }

        $constructor->addBody('];');

        $declarationListsTemplateClass = ClassType::withBodiesFrom(Template\DeclarationLists::class);
        foreach ($declarationListsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }
    }

    /**
     * Adapt JSON spec data.
     *
     * @param array $jsonSpec JSON spec data to adapt.
     * @return array Adapted JSON spec data.
     */
    protected function adaptSpec($jsonSpec)
    {
        $declarationList = [];

        foreach ($jsonSpec as $entry) {
            $key  = $entry['name'];
            $data = $entry['declaration'];

            $declarationList[$key] = [];

            foreach ($data as $datum) {
                $name = $datum['name'];
                unset($datum['name']);
                $declarationList[$key][$name] = $datum;
            }
        }

        return $declarationList;
    }
}
