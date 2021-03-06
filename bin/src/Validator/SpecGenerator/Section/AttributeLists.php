<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ClassNames;
use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\MagicPropertyAnnotations;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class AttributeLists implements Section
{
    use ClassNames;
    use ConstantNames;
    use MagicPropertyAnnotations;

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
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\AttributeList");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Iteration");

        $data = $this->adaptSpec($spec);

        $class->addImplement("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $class->addTrait(
            "{$fileManager->getRootNamespace()}\\Spec\\Iteration",
            ['Iteration::current as parentCurrent']
        );

        $class->addProperty('attributeLists')
              ->setValue([])
              ->setPrivate()
              ->addComment("Cache of instantiated AttributeList objects.\n\n@var array<Spec\\AttributeList>");

        $attributeLists = [];
        foreach ($data as $key => $value) {
            $className = $this->generateAttributeListSpecificClass($key, $value, $fileManager);

            $attributeLists["AttributeList\\{$className}::ID"] = "AttributeList\\{$className}::class";
        }
        $class->addConstant('ATTRIBUTE_LISTS', $attributeLists)
              ->addComment("Mapping of attribute list ID to attribute list implementation.\n\n@var array<string>");

        $attributeListsTemplateClass = ClassType::withBodiesFrom(Template\AttributeLists::class);
        foreach ($attributeListsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }
        $class->addComment($attributeListsTemplateClass->getComment());
    }

    /**
     * Adapt JSON spec data.
     *
     * @param array $jsonSpec JSON spec data to adapt.
     * @return array Adapted JSON spec data.
     */
    protected function adaptSpec($jsonSpec)
    {
        $attributeList = [];

        foreach ($jsonSpec as $entry) {
            $key  = $entry['name'];
            $data = $entry['attrs'];

            $attributeList[$key] = [];

            foreach ($data as $datum) {
                $name = $datum['name'];
                unset($datum['name']);
                $attributeList[$key][$name] = $datum;
            }
        }

        return $attributeList;
    }

    /**
     * Generate the AttributeList-specific class file.
     *
     * @param string      $attributeListId ID of the attribute list to generate the class for.
     * @param array       $jsonSpec        Array of spec data for the attribute list.
     * @param FileManager $fileManager     File manager instance to use.
     * @return string Short name of the class that was generated.
     */
    private function generateAttributeListSpecificClass($attributeListId, $jsonSpec, FileManager $fileManager)
    {
        list($file, $namespace) = $fileManager->createNewNamespacedFile('Spec\\AttributeList');

        $className = $this->getClassNameFromId($attributeListId);

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\AttributeList");

        /** @var ClassType $class */
        $class = $namespace->addClass($className)
                           ->setFinal()
                           ->addExtend('AmpProject\Validator\Spec\AttributeList')
                           ->addImplement('AmpProject\Validator\Spec\Identifiable');

        $class->addConstant('ID', $attributeListId)
              ->addComment("ID of the attribute list.\n\n@var string");

        $attributes = [];
        foreach ($jsonSpec as $key => $value) {
            $attributes[$this->getKeyString($key)] = $value;
        }

        $class->addConstant('ATTRIBUTES', $attributes)
              ->addComment("Array of attributes.\n\n@var array<array>");

        $classComment = "Attribute list class {$className}.\n\n";
        $classComment .= "@package ampproject/amp-toolbox.\n\n";
        $classComment .= implode("\n", $this->getMagicPropertyAnnotations($jsonSpec));
        $class->addComment($classComment);

        $fileManager->saveFile($file, "Spec/AttributeList/{$className}.php");

        return $className;
    }

    /**
     * Get the string to use as key for the attribute list.
     *
     * This automatically reuses existing constants to reduce memory consumption.
     *
     * @param string $attributeListId Attribute list ID to produce a key string for.
     * @return string Key string to use.
     */
    private function getKeyString($attributeListId)
    {
        if (!is_string($attributeListId)) {
            return $attributeListId;
        }

        return $this->getAttributeConstant($this->getConstantName($attributeListId));
    }
}
