<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\Dumper;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\ReservedKeywords;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class DescendantTagLists implements Section
{
    use ConstantNames;

    /**
     * Dumper instance to use.
     *
     * @var Dumper
     */
    private $dumper;

    /**
     * DescendantTagLists constructor.
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
        $namespace->addUse('AmpProject\Exception\InvalidListName');
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\DescendantTagList");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Iteration");

        $this->data = $this->adaptSpec($spec);

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
              ->addComment("Mapping of descendant tag list ID to descendant tag list implementation.\n\n@var array<string>");

        $descendantTagListsTemplateClass = ClassType::withBodiesFrom(Template\DescendantTagLists::class);
        foreach ($descendantTagListsTemplateClass->getMethods() as $method) {
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

        $className = self::getDescendantTagListClassFromDescendantTagListId($descendantTagListId);

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\SpecRule");
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

        $fileManager->saveFile($file, "Spec/DescendantTagList/{$className}.php");

        return $className;
    }

    /**
     * Get a valid PHP class name from the descendant tag list ID string.
     *
     * @param string $descendantTagListId Descendant tag list ID to get a valid PHP class name from.
     * @return string Valid PHP class name.
     */
    public static function getDescendantTagListClassFromDescendantTagListId($descendantTagListId)
    {
        $className = str_replace(
            ['(', ')', '[', ']', '-', '=', '>', '.', '_', '/', '*', ':', '+', '$'],
            ' ',
            $descendantTagListId
        );
        $className = preg_replace('/\s+/', ' ', trim($className));
        $className = str_replace(' ', '', ucwords(strtolower($className)));

        $className = (new ReservedKeywords())->maybeAddSuffix($className);

        return $className;
    }
}
