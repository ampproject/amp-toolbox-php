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

final class DescendantTagLists implements Section
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
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\DescendantTagList");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Iteration");

        $this->data = $this->adaptSpec($spec); // @todo Property declared dynamically.

        $class->addImplement("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $class->addTrait(
            "{$fileManager->getRootNamespace()}\\Spec\\Iteration",
            ['Iteration::current as parentCurrent']
        );

        $class->addProperty('descendantTagLists')
              ->setValue([])
              ->setPrivate()
              ->addComment("Cache of instantiated descendant tag list objects.\n\n@var array<Spec\\DescendantTagList>");

        $descendantTagLists = [];
        foreach ($this->data as $key => $value) {
            $className = $this->generateDescendantTagListSpecificClass($key, $value, $fileManager);

            $descendantTagLists["DescendantTagList\\{$className}::ID"] = "DescendantTagList\\{$className}::class";
        }
        $class->addConstant('DESCENDANT_TAG_LISTS', $descendantTagLists)
              ->addComment(
                  "Mapping of descendant tag list ID to descendant tag list implementation.\n\n@var array<string>"
              );

        $descendantTagListsTemplateClass = ClassType::withBodiesFrom(Template\DescendantTagLists::class);
        foreach ($descendantTagListsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }
        $class->addComment($descendantTagListsTemplateClass->getComment());
    }

    /**
     * Adapt JSON spec data.
     *
     * @param array $jsonSpec JSON spec data to adapt.
     * @return array Adapted JSON spec data.
     */
    protected function adaptSpec($jsonSpec)
    {
        $descendantTagList = [];

        foreach ($jsonSpec as $entry) {
            $descendantTagList[$entry['name']] = $entry['tag'];
        }

        return $descendantTagList;
    }

    /**
     * Generate the DescendantTagList-specific class file.
     *
     * @param string      $descendantTagListId ID of the descendant tag list to generate the class for.
     * @param array       $jsonSpec        Array of spec data for the descendant tag list.
     * @param FileManager $fileManager     File manager instance to use.
     * @return string Short name of the class that was generated.
     */
    private function generateDescendantTagListSpecificClass($descendantTagListId, $jsonSpec, FileManager $fileManager)
    {
        list($file, $namespace) = $fileManager->createNewNamespacedFile('Spec\\DescendantTagList');

        $className = $this->getClassNameFromId($descendantTagListId);

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\DescendantTagList");

        /** @var ClassType $class */
        $class = $namespace->addClass($className)
                           ->setFinal()
                           ->addExtend('AmpProject\Validator\Spec\DescendantTagList');

        $class->addConstant('ID', $descendantTagListId)
              ->addComment("ID of the descendant tag list.\n\n@var string");

        $descendantTags = [];
        foreach ($jsonSpec as $key => $value) {
            $descendantTags[$key] = $this->getTagConstant($this->getConstantName($value));
        }

        $class->addConstant('DESCENDANT_TAGS', $descendantTags)
              ->addComment("Array of descendant tags.\n\n@var array<array>");

        $classComment = "Descendant tag list class {$className}.\n\n";
        $classComment .= "@package ampproject/amp-toolbox.\n\n";
        $classComment .= implode("\n", $this->getMagicPropertyAnnotations($jsonSpec));
        $class->addComment($classComment);

        $fileManager->saveFile($file, "Spec/DescendantTagList/{$className}.php");

        return $className;
    }
}
