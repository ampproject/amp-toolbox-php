<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ClassNames;
use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class DeclarationLists implements Section
{
    use ClassNames;
    use ConstantNames;

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
        $namespace->addUse('AmpProject\Exception\InvalidListName');
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\DeclarationList");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Iteration");

        $this->data = $this->adaptSpec($spec);

        $class->addImplement("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $class->addTrait(
            "{$fileManager->getRootNamespace()}\\Spec\\Iteration",
            ['Iteration::current as parentCurrent']
        );

        $class->addProperty('declarationLists')
              ->setValue([])
              ->setPrivate()
              ->addComment("Cache of instantiated declaration list objects.\n\n@var array<Spec\\DeclarationList>");

        $declarationLists = [];
        foreach ($this->data as $key => $value) {
            $className = $this->generateDeclarationListSpecificClass($key, $value, $fileManager);

            $declarationLists["DeclarationList\\{$className}::ID"] = "DeclarationList\\{$className}::class";
        }
        $class->addConstant('DECLARATION_LISTS', $declarationLists)
              ->addComment("Mapping of declaration list ID to declaration list implementation.\n\n@var array<string>");

        $declarationListsTemplateClass = ClassType::withBodiesFrom(Template\DeclarationLists::class);
        foreach ($declarationListsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }
        $class->addComment($declarationListsTemplateClass->getComment());
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

    /**
     * Generate the DeclarationList-specific class file.
     *
     * @param string      $declarationListId ID of the declaration list to generate the class for.
     * @param array       $jsonSpec        Array of spec data for the declaration list.
     * @param FileManager $fileManager     File manager instance to use.
     * @return string Short name of the class that was generated.
     */
    private function generateDeclarationListSpecificClass($declarationListId, $jsonSpec, FileManager $fileManager)
    {
        list($file, $namespace) = $fileManager->createNewNamespacedFile('Spec\\DeclarationList');

        $className = $this->getClassNameFromId($declarationListId);

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\DeclarationList");

        /** @var ClassType $class */
        $class = $namespace->addClass($className)
                           ->setFinal()
                           ->addExtend('AmpProject\Validator\Spec\DeclarationList');

        $class->addConstant('ID', $declarationListId)
              ->addComment("ID of the declaration list.\n\n@var string");

        $declarations = [];
        foreach ($jsonSpec as $key => $value) {
            $declarations[$this->getKeyString($key)] = $value;
        }

        $class->addConstant('DECLARATIONS', $declarations)
              ->addComment("Array of declarations.\n\n@var array<array>");

        $fileManager->saveFile($file, "Spec/DeclarationList/{$className}.php");

        return $className;
    }

    /**
     * Get the string to use as key for the declaration list.
     *
     * This automatically reuses existing constants to reduce memory consumption.
     *
     * @param string $declarationListId Declaration list ID to produce a key string for.
     * @return string Key string to use.
     */
    private function getKeyString($declarationListId)
    {
        if (!is_string($declarationListId)) {
            return $declarationListId;
        }

        return $this->getAttributeConstant($this->getConstantName($declarationListId));
    }
}
