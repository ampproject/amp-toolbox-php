<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ArrayKeyFirstPolyfill;
use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use AmpProject\Tooling\Validator\SpecGenerator\VariableDumping;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class Tags implements Section
{
    use ArrayKeyFirstPolyfill;
    use ConstantNames;
    use VariableDumping;

    /**
     * Associative array of tags and their attributes.
     *
     * @var array<string,array>
     */
    private $tags = [];

    /**
     * Provide hashed access to tags by tag name.
     *
     * @var array<string,array<int,array>>
     */
    private $byTagName = [];

    /**
     * Provide hashed access to tags by spec name.
     *
     * @var array<string,string>
     */
    private $bySpecName = [];

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
        $namespace->addUse("AmpProject\\Exception\\InvalidSpecName");
        $namespace->addUse('AmpProject\\Extension');
        $namespace->addUse('AmpProject\\Format');
        $namespace->addUse('AmpProject\\Internal');
        $namespace->addUse('AmpProject\\Tag', 'Element');
        $namespace->addUse("{$rootNamespace}\\Spec\\Tag");

        $tagsTemplateClass = ClassType::withBodiesFrom(Template\Tags::class);
        foreach ($tagsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }

        $class->addProperty('tags')
              ->setPrivate()
              ->addComment('@var array<string,Tag>');

        $class->addProperty('byTagName')
              ->setPrivate()
              ->addComment('@var array<string,array<int,Tag>>');

        $class->addProperty('bySpecName')
              ->setPrivate()
              ->addComment('@var array<string,Tag>');

        $constructor = $class->addMethod('__construct');

        foreach ($spec as $attributes) {
            $this->tags[$this->getTagId($attributes)] = $attributes;
        }

        $tagIds = array_keys($this->tags);
        natcasesort($tagIds);

        $constructor->addBody('$this->tags = [');

        foreach ($tagIds as $tagId) {
            $keyString = $this->getKeyString($tagId);
            $constructor->addBody("    {$keyString} => new Tag(");
            $constructor->addBody('        [');

            foreach ($this->tags[$tagId] as $key => $attribute) {
                switch ($key) {
                    case 'tagName':
                        if (strpos($attribute, '$') === 0) {
                            $constructor->addBody("        'tagName' => {$this->dump($attribute, 3)},");
                        } else {
                            $constant = $this->getTagConstant($this->getConstantName($attribute));
                            $constructor->addBody("        'tagName' => {$constant},");
                        }
                        break;
                    case 'htmlFormat':
                        $formats = [];
                        foreach ($attribute as $format) {
                            $constant = $this->getFormatConstant($format);
                            $formats[] = $constant === $format ? "'{$format}'" : $constant;
                        }
                        $formatsString = implode(', ', $formats);
                        $constructor->addBody("        'htmlFormat' => [{$formatsString}],");
                        break;
                    default:
                        $constructor->addBody("        '{$key}' => {$this->dump($attribute, 3)},");
                }
            }

            $constructor->addBody('        ]');
            $constructor->addBody('    ),');

            if (array_key_exists('tagName', $this->tags[$tagId])) {
                $tagName = $this->tags[$tagId]['tagName'];
                if (strpos($tagName, '$') !== 0) {
                    if (!array_key_exists($tagName, $this->byTagName)) {
                        $this->byTagName[$tagName] = [];
                    }
                    $this->byTagName[$tagName][$tagId] = $this->tags[$tagId];
                }
            }

            if (array_key_exists('specName', $this->tags[$tagId])) {
                $specName                    = $this->tags[$tagId]['specName'];
                $this->bySpecName[$specName] = $tagId;
            }
        }

        $constructor->addBody('];');

        $constructor->addBody('$this->byTagName = [');
        foreach ($this->byTagName as $tagName => $tags) {
            $constant = $this->getTagConstant($this->getConstantName($tagName));
            if (count($tags) > 1) {
                $constructor->addBody("    {$constant} => [");
                foreach ($tags as $tagId => $attributes) {
                    $keyString = $this->getKeyString($tagId);
                    $constructor->addBody("        \$this->tags[{$keyString}],");
                }
                $constructor->addBody('    ],');
            } else {
                $keyString = $this->getKeyString($this->arrayKeyFirst($tags));
                $constructor->addBody("    {$constant} => \$this->tags[{$keyString}],");
            }
        }
        $constructor->addBody('];');

        $constructor->addBody('$this->bySpecName = [');
        foreach ($this->bySpecName as $specName => $tagId) {
            $keyString = $this->getKeyString($tagId);
            $constructor->addBody("    '{$specName}' => \$this->tags[{$keyString}],");
        }
        $constructor->addBody('];');
    }


    /**
     * Get a unique tag ID.
     *
     * @param array $attributes Attributes array to get the tag ID for.
     * @return string Tag ID.
     */
    private function getTagId($attributes)
    {
        if (array_key_exists('specName', $attributes)) {
            $specName = $attributes['specName'];
        } elseif (array_key_exists('tagName', $attributes)) {
            $specName = $attributes['tagName'];
        } else {
            $specName = 'unnamed';
        }

        $tagId = $specName;
        $index = 1;

        while (array_key_exists($tagId, $this->tags)) {
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
        if (array_key_exists('tagName', $this->tags[$tagId]) && $this->tags[$tagId]['tagName'] === $tagId) {
            return $this->getTagConstant($this->getConstantName($tagId));
        }

        return "'{$tagId}'";
    }
}
