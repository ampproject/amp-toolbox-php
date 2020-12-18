<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Dumper;
use Nette\PhpGenerator\PhpNamespace;

final class Tags implements Section
{

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
        $tagsTemplateClass = ClassType::withBodiesFrom(Template\Tags::class);
        foreach ($tagsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }

        $namespace->addUse("AmpProject\\Exception\\InvalidSpecName");
        $namespace->addUse("{$rootNamespace}\\Spec\\Tag");

        $class->addProperty('tags')
              ->setValue([])
              ->setPrivate()
              ->addComment('@var array<string,Tag>');

        $class->addProperty('byTagName')
              ->setValue([])
              ->setPrivate()
              ->addComment('@var array<string,array<int,Tag>>');

        $class->addProperty('bySpecName')
              ->setValue([])
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
            $constructor->addBody('    ? => new Tag(', [$tagId]);
            $constructor->addBody('        [');

            foreach ($this->tags[$tagId] as $key => $attribute) {
                $constructor->addBody("        '{$key}' => {$this->dump($attribute, 3)},");
            }

            $constructor->addBody('        ]');
            $constructor->addBody('    ),');

            if (array_key_exists('tagName', $this->tags[$tagId])) {
                $tagName = $this->tags[$tagId]['tagName'];
                if (!array_key_exists($tagName, $this->byTagName)) {
                    $this->byTagName[$tagName] = [];
                }
                $this->byTagName[$tagName][$tagId] = $this->tags[$tagId];
            }

            if (array_key_exists('specName', $this->tags[$tagId])) {
                $specName                    = $this->tags[$tagId]['specName'];
                $this->bySpecName[$specName] = $tagId;
            }
        }

        $constructor->addBody('];');

        $constructor->addBody('$this->byTagName = [');
        foreach ($this->byTagName as $tagName => $tags) {
            $constructor->addBody("    '{$tagName}' => [");
            foreach ($tags as $tagId => $attributes) {
                $constructor->addBody("        \$this->tags['{$tagId}'],");
            }
            $constructor->addBody('    ],');
        }
        $constructor->addBody('];');

        $constructor->addBody('$this->bySpecName = [');
        foreach ($this->bySpecName as $specName => $tagId) {
            $constructor->addBody("    '{$specName}' => \$this->tags['{$tagId}'],");
        }
        $constructor->addBody('];');
    }

    /**
     * Dump a variable so it can be used for code generation.
     *
     * @param mixed $variable Variable to dump.
     * @param int   $level    Indentation level to use.
     * @return string Dump of the provided variable.
     */
    private function dump($variable, $level)
    {
        $dumper = new Dumper();
        $extraIndentation = str_pad('', $level * 4, ' ');
        return str_replace("\n", "\n{$extraIndentation}", $dumper->dump($variable));
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
}
