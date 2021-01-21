<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ArrayKeyFirstPolyfill;
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
    use ConstantNames;

    const PHP_KEYWORDS = [
        'A',
    ];

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

        $namespace->addUse('AmpProject\\Exception\\InvalidSpecName');
        $namespace->addUse('AmpProject\\Attribute');
        $namespace->addUse('AmpProject\\Extension');
        $namespace->addUse('AmpProject\\Format');
        $namespace->addUse('AmpProject\\Internal');
        $namespace->addUse('AmpProject\\Layout');
        $namespace->addUse('AmpProject\\Tag', 'Element');
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\SpecRule");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Tag");

        $tagsTemplateClass = ClassType::withBodiesFrom(Template\Tags::class);
        foreach ($tagsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }

        $class->addProperty('tagsCache')
              ->setPrivate()
              ->addComment('@var array<Tag>');

        $class->addProperty('byTagName')
              ->setPrivate()
              ->addComment('@var array<array>');

        $class->addProperty('bySpecName')
              ->setPrivate()
              ->addComment('@var array');

        $class->addProperty('byFormat')
              ->setPrivate()
              ->addComment('@var array<array>');

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
                    if (!array_key_exists($tagName, $byTagName)) {
                        $byTagName[$tagName] = [];
                    }
                    $byTagName[$tagName][$tagId] = $tags[$tagId];
                }
            }

            if (array_key_exists('specName', $tags[$tagId])) {
                $specName                    = $tags[$tagId]['specName'];
                $bySpecName[$specName] = $tagId;
            }

            if (array_key_exists('htmlFormat', $tags[$tagId])) {
                $formats = $tags[$tagId]['htmlFormat'];
                foreach ($formats as $format) {
                    if (!array_key_exists($format, $byFormat)) {
                        $byFormat[$format] = [];
                    }
                    $byFormat[$format][] = $tagId;
                }
            }
        }

/*        $constructor->addBody('$this->byTagName = [');
        foreach ($byTagName as $tagName => $tagData) {
            $constant = $this->getTagConstant($this->getConstantName($tagName));
            if (count($tagData) > 1) {
                $constructor->addBody("    {$constant} => [");
                foreach ($tagData as $tagId => $attributes) {
                    $keyString = $this->getKeyString($tags, $tagId);
                    $constructor->addBody("        \$this->tags[{$keyString}],");
                }
                $constructor->addBody('    ],');
            } else {
                $keyString = $this->getKeyString($tags, $this->arrayKeyFirst($tagData));
                $constructor->addBody("    {$constant} => \$this->tags[{$keyString}],");
            }
        }
        $constructor->addBody('];');

        $constructor->addBody('$this->bySpecName = [');
        foreach ($bySpecName as $specName => $tagId) {
            $keyString = $this->getKeyString($tags, $tagId);
            $constructor->addBody("    '{$specName}' => \$this->tags[{$keyString}],");
        }
        $constructor->addBody('];');

        $constructor->addBody('$this->byFormat = [');
        foreach ($byFormat as $tagName => $tagIds) {
            $constant = $this->getFormatConstant($this->getConstantName($tagName));
            if (count($tagIds) > 1) {
                $constructor->addBody("    {$constant} => [");
                foreach ($tagIds as $tagId) {
                    $keyString = $this->getKeyString($tags, $tagId);
                    $constructor->addBody("        \$this->tags[{$keyString}],");
                }
                $constructor->addBody('    ],');
            } else {
                $keyString = $this->getKeyString($tags, $this->arrayKeyFirst($tagIds));
                $constructor->addBody("    {$constant} => \$this->tags[{$keyString}],");
            }
        }
        $constructor->addBody('];');*/
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
     * @param array  $tags  Array of tags that were collected.
     * @param string $tagId Tag ID to produce a key string for.
     * @return string Key string to use.
     */
    private function getKeyString($tags, $tagId)
    {
        if (array_key_exists('tagName', $tags[$tagId]) && $tags[$tagId]['tagName'] === $tagId) {
            return $this->getTagConstant($this->getConstantName($tagId));
        }

        return "'{$tagId}'";
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
            $tagMappings[$tagId] = $this->getTagClassFromTagId($tagId);
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

        if (in_array($className, self::PHP_KEYWORDS, true)) {
            $className = "{$className}_";
        }

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

        /** @var ClassType $class */
        $class = $namespace->addClass($className)
                           ->setFinal();

        $tagSpec = "[\n";
        foreach ($jsonSpec as $key => $value) {
            switch ($key) {
                case 'ampLayout':
                    if (array_key_exists('supportedLayouts', $value)) {
                        foreach ($value['supportedLayouts'] as $index => $layout) {
                            $value['supportedLayouts'][$index] = $this->getLayoutConstant(
                                $this->getConstantName($layout)
                            );
                        }
                    }
                    $tagSpec .= "{$this->dumper->dumpWithSpecRuleKey($key, $value, 3)}\n";
                    break;
                case 'attrs':
                    $tagSpec .= "SpecRule::ATTRS => [\n";
                    foreach ($value as $attributeArray) {
                        $constant = $this->getAttributeConstant($this->getConstantName($attributeArray['name']));
                        $attributeArray['name'] = $constant === $attributeArray['name']
                            ? "'{$attributeArray['name']}'"
                            : $constant;
                        $tagSpec .= "    [\n";
                        foreach ($attributeArray as $attributeKey => $attributeData) {
                            $line = $this->dumper->dumpWithSpecRuleKey($attributeKey, $attributeData, 5);
                            $tagSpec .= "        {$line}\n";
                        }
                        $tagSpec .= "    ],\n";
                    }
                    $tagSpec .= "],\n";
                    break;
                case 'htmlFormat':
                    $formats = [];
                    foreach ($value as $format) {
                        $constant = $this->getFormatConstant($format);
                        $formats[] = $constant === $format ? "'{$format}'" : $constant;
                    }
                    $tagSpec .= "{$this->dumper->dumpWithSpecRuleKey($key, $formats, 3)}\n";
                    break;
                case 'mandatoryAncestor':
                case 'mandatoryAncestorSuggestedAlternative':
                case 'mandatoryParent':
                case 'tagName':
                    $constant = $value;
                    if (strpos($value, '$') !== 0 && strpos($value, ' ') === false) {
                        $constant = $this->getTagConstant($this->getConstantName($value));
                    }
                    $tagSpec .= "{$this->dumper->dumpWithSpecRuleKey($key, $constant, 3)}\n";
                    break;
                default:
                    $tagSpec .= "{$this->dumper->dumpWithSpecRuleKey($key, $value, 3)}\n";
            }
        }
        $tagSpec .= "];";

        $class->addConstant('SPEC', $tagSpec);

        $fileManager->saveFile($file, "Spec/Tag/{$className}.php");
    }
}
