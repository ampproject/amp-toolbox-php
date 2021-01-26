<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\Dumper;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class DeclarationLists implements Section
{
    use ConstantNames;

    /**
     * Dumper instance to use.
     *
     * @var Dumper
     */
    private $dumper;

    /**
     * DeclarationLists constructor.
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
        $namespace->addUse('AmpProject\Attribute');
        $namespace->addUse('AmpProject\Exception\InvalidListName');
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\SpecRule");

        $this->data = $this->adaptSpec($spec);

        $class->addProperty('declarations')
              ->setPrivate()
              ->addComment('@var array<Spec\DeclarationList>');

        $constructor = $class->addMethod('__construct');

        $constructor->addBody('$this->? = [', ['declarations']);

        foreach ($this->data as $key => $value) {
            $constructor->addBody("    '{$key}' => new Spec\DeclarationList(");
            $constructor->addBody('        [');
            foreach ($value as $subKey => $subValue) {
                $constant  = $this->getAttributeConstant($this->getConstantName($subKey));
                $keyString = strpos($constant, 'Attribute::') === 0 ? $constant : "'{$subKey}'";
                if (count($subValue) === 0) {
                    $constructor->addBody("            {$keyString} => [],");
                } else {
                    $constructor->addBody("            {$keyString} => [");
                    foreach ($subValue as $specRuleKey => $specRule) {
                        $line = $this->dumper->dumpWithSpecRuleKey($specRuleKey, $specRule, 4);
                        $constructor->addBody("                {$line}");
                    }
                    $constructor->addBody("            ],");
                }
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