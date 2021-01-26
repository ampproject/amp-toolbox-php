<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ArrayKeyFirstPolyfill;
use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\Dumper;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\ReservedKeywords;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class Tags implements Section
{
    use ArrayKeyFirstPolyfill;
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
        $tags       = [];
        $byTagName  = [];
        $bySpecName = [];
        $byFormat   = [];

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Tag");

        $tagsTemplateClass = ClassType::withBodiesFrom(Template\Tags::class);
        foreach ($tagsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }

        $class->addProperty('tagsCache')
              ->setPrivate()
              ->addComment('@var array<Tag>')
              ->setValue([]);

        foreach ($spec as $attributes) {
            $tagId        = $this->getTagId($tags, $attributes);
            $tags[$tagId] = $attributes;
        }

        $tagIds = array_keys($tags);
        natcasesort($tagIds);

        $class->addConstant('TAGS', $this->getTagsMapping($tags));

        foreach ($tagIds as $tagId) {
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
                        $byTagName[$tagName][] = $this->getKeyString($tagId);
                    } else {
                        $byTagName[$tagName] = $this->getKeyString($tagId);
                    }
                }
            }

            if (array_key_exists('specName', $tags[$tagId])) {
                $specName              = $this->getKeyString($tags[$tagId]['specName']);
                $bySpecName[$specName] = $this->getKeyString($tagId);
            }

            if (array_key_exists('htmlFormat', $tags[$tagId])) {
                $formats = $tags[$tagId]['htmlFormat'];
                foreach ($formats as $format) {
                    $format = $this->getFormatConstant($this->getConstantName($format));
                    if (!array_key_exists($format, $byFormat)) {
                        $byFormat[$format] = [];
                    }
                    $byFormat[$format][] = $this->getKeyString($tagId);
                }
            }
        }

        $class->addConstant('BY_TAG_NAME', $byTagName);
        $class->addConstant('BY_SPEC_NAME', $bySpecName);
        $class->addConstant('BY_FORMAT', $byFormat);
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
            $specName .= " ({$attributes['extensionSpec']['name']})";
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

            $class = "Tag\\{$this->getTagClassFromTagId($tagId)}::class";
            $tagId = $this->getKeyString($tagId);

            $tagMappings[$tagId] = $class;
        }

        return $tagMappings;
    }

    /**
     * Get a valid PHP class name from the tag ID string.
     *
     * @param string $tagId Tag ID to get a valid PHP class name from.
     * @return string Valid PHP class name.
     */
    private function getTagClassFromTagId($tagId)
    {
        $className = str_replace(['(', ')', '[', ']', '-', '=', '>', '.', '_', '/', '*', ':', '+'], ' ', $tagId);
        $className = preg_replace('/\s+/', ' ', trim($className));
        $className = str_replace(' ', '', ucwords(strtolower($className)));

        $className = (new ReservedKeywords())->maybeAddSuffix($className);

        return $className;
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

        $className = $this->getTagClassFromTagId($tagId);

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\SpecRule");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Tag");

        /** @var ClassType $class */
        $class = $namespace->addClass($className)
                           ->setFinal()
                           ->addExtend('AmpProject\Validator\Spec\Tag');

        $class->addConstant('SPEC', $jsonSpec);

        $fileManager->saveFile($file, "Spec/Tag/{$className}.php");
    }
}
