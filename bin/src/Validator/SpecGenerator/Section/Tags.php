<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ArrayKeyFirstPolyfill;
use AmpProject\Tooling\Validator\SpecGenerator\ClassNames;
use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\Dumper;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class Tags implements Section
{
    use ArrayKeyFirstPolyfill;
    use ClassNames;
    use ConstantNames;

    /**
     * Dumper instance to use.
     *
     * @var Dumper
     */
    private $dumper;

    /**
     * Tags constructor.
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
        $tags            = [];
        $byTagName       = [];
        $bySpecName      = [];
        $byFormat        = [];
        $byExtensionSpec = [];

        $namespace->addUse("LogicException");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Iteration");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Tag");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\TagWithExtensionSpec");

        $tagsTemplateClass = ClassType::withBodiesFrom(Template\Tags::class);
        foreach ($tagsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }

        $class->addImplement("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $class->addTrait(
            "{$fileManager->getRootNamespace()}\\Spec\\Iteration",
            ['Iteration::current as parentCurrent']
        );

        $class->addProperty('tagsCache')
              ->setPrivate()
              ->addComment("Cache of instantiated Tag objects.\n\n@var array<Tag>")
              ->setValue([]);

        $class->addProperty('iterationArray')
              ->setPrivate()
              ->addComment("Array used for storing the iteration index in.\n\n@var array<string>|null");

        foreach ($spec as $attributes) {
            $tagId        = $this->getTagId($tags, $attributes);
            $tags[$tagId] = $attributes;
        }

        $tagIds = array_keys($tags);
        natcasesort($tagIds);

        $class->addConstant('TAGS', $this->getTagsMapping($tags))
              ->addComment("Mapping of tag ID to tag implementation.\n\n@var array<string>");


        foreach ($tagIds as $tagId) {
            $tagIdString = "Tag\\{$this->getClassNameFromId($tagId)}::ID";

            $this->generateTagSpecificClass($tagId, $tags[$tagId], $fileManager);

            if (array_key_exists('tagName', $tags[$tagId])) {
                $tagName = $tags[$tagId]['tagName'];
                if (strpos($tagName, '$') !== 0) {
                    $tagName = $this->getKeyString($tagName);
                    if (array_key_exists($tagName, $byTagName)) {
                        if (!is_array($byTagName[$tagName])) {
                            $previousTagId         = $byTagName[$tagName];
                            $byTagName[$tagName]   = [];
                            $byTagName[$tagName][] = $previousTagId;
                        }
                        $byTagName[$tagName][] = $tagIdString;
                    } else {
                        $byTagName[$tagName] = $tagIdString;
                    }
                }
            }

            if (array_key_exists('specName', $tags[$tagId])) {
                // Spec name and tag ID happens to be the same at this point but could change in the future.
                $specName              = $tagIdString;
                $bySpecName[$specName] = $tagIdString;
            }

            if (array_key_exists('htmlFormat', $tags[$tagId])) {
                $formats = $tags[$tagId]['htmlFormat'];
                foreach ($formats as $format) {
                    $format = $this->getFormatConstant($this->getConstantName($format));
                    if (!array_key_exists($format, $byFormat)) {
                        $byFormat[$format] = [];
                    }
                    $byFormat[$format][] = $tagIdString;
                }
            }

            if (array_key_exists('extensionSpec', $tags[$tagId])) {
                $extensionSpec                   = $tags[$tagId]['extensionSpec'];
                $extensionName                   = $this->getKeyString($extensionSpec['name']);
                $byExtensionSpec[$extensionName] = $tagIdString;
            }
        }

        $class->addConstant('BY_TAG_NAME', $byTagName)
              ->addComment(
                  "Mapping of tag name to tag ID or array of tag IDs.\n\n"
                  . "This is used to optimize querying by tag name.\n\n"
                  . "@var array<string|array<string>>"
              );

        $class->addConstant('BY_SPEC_NAME', $bySpecName)
            ->addComment(
                "Mapping of spec name to tag ID.\n\n"
                . "This is used to optimize querying by spec name.\n\n"
                . "@var array<string>"
            );

        $class->addConstant('BY_FORMAT', $byFormat)
            ->addComment(
                "Mapping of AMP format to array of tag IDs.\n\n"
                . "This is used to optimize querying by AMP format.\n\n"
                . "@var array<array<string>>"
            );

        $class->addConstant('BY_EXTENSION_SPEC', $byExtensionSpec)
            ->addComment(
                "Mapping of extension name to tag ID.\n\n"
                . "This is used to optimize querying by extension spec.\n\n"
                . "@var array<string>"
            );
    }

    /**
     * Get a unique tag ID.
     *
     * @param array $tags       Array of tags that were collected.
     * @param array $attributes Attributes array to get the tag ID for.
     * @return string Tag ID.
     */
    private function getTagId($tags, $attributes)
    {
        if (array_key_exists('specName', $attributes)) {
            $specName = $attributes['specName'];
        } elseif (array_key_exists('tagName', $attributes)) {
            $specName = $attributes['tagName'];
        } else {
            $specName = 'unnamed';
        }

        if ($specName === 'SCRIPT' && array_key_exists('extensionSpec', $attributes)) {
            $specName .= " [{$attributes['extensionSpec']['name']}]";
        }

        $tagId = $specName;
        $index = 1;

        while (array_key_exists($tagId, $tags)) {
            $index++;
            $tagId = "{$specName} ({$index})";
        }

        return $tagId;
    }

    /**
     * Get the string to use as key for the tag.
     *
     * This automatically reuses existing constant to reduce memory consumption.
     *
     * @param string $tagId Tag ID to produce a key string for.
     * @return string Key string to use.
     */
    private function getKeyString($tagId)
    {
        if (!is_string($tagId)) {
            return $tagId;
        }

        $constant = $this->getTagConstant($this->getConstantName($tagId));

        $definition = "AmpProject\\{$constant}";
        $definition = str_replace('\\Element::', '\\Tag::', $definition);

        if (!defined($definition)) {
            return $tagId;
        }

        return $constant;
    }

    /**
     * Get the tag mappings that map tag names to tag implementations.
     *
     * @param array $tags Array of tags that were collected.
     * @return array Tags mapping information.
     */
    private function getTagsMapping($tags)
    {
        $tagMappings = [];

        foreach ($tags as $tagId => $attributes) {
            unset($tagMappings[$tagId]);

            $class = "Tag\\{$this->getClassNameFromId($tagId)}::class";
            $tagId = "Tag\\{$this->getClassNameFromId($tagId)}::ID";

            $tagMappings[$tagId] = $class;
        }

        return $tagMappings;
    }

    /**
     * Generate the tag-specific class file.
     *
     * @param string      $tagId       ID of the tag to generate the class for.
     * @param array       $jsonSpec    Array of spec data for the tag.
     * @param FileManager $fileManager File manager instance to use.
     */
    private function generateTagSpecificClass($tagId, $jsonSpec, FileManager $fileManager)
    {
        list($file, $namespace) = $fileManager->createNewNamespacedFile('Spec\\Tag');

        $className = $this->getClassNameFromId($tagId);

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\SpecRule");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Tag");

        /** @var ClassType $class */
        $class = $namespace->addClass($className)
                           ->setFinal()
                           ->addExtend('AmpProject\Validator\Spec\Tag');

        $class->addConstant('ID', $tagId)
              ->addComment("ID of the tag.\n\n@var string");

        if (array_key_exists('extensionSpec', $jsonSpec)) {
            $extensionSpec             = $jsonSpec['extensionSpec'];
            $jsonSpec['extensionSpec'] = "self::EXTENSION_SPEC";

            $class->addConstant('EXTENSION_SPEC', $extensionSpec)
                  ->addComment("Array of extension spec rules.\n\n@var array");

            $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\TagWithExtensionSpec");
            $class->addImplement("{$fileManager->getRootNamespace()}\\Spec\\TagWithExtensionSpec");
            $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\ExtensionSpec");
            $class->addTrait("{$fileManager->getRootNamespace()}\\Spec\\ExtensionSpec");
        }

        $class->addConstant('SPEC', $jsonSpec)
              ->addComment("Array of spec rules.\n\n@var array");

        $fileManager->saveFile($file, "Spec/Tag/{$className}.php");
    }
}
