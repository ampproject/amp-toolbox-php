<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ArrayKeyFirstPolyfill;
use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use AmpProject\Tooling\Validator\SpecGenerator\VariableDumping;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class Css implements Section
{
    use ArrayKeyFirstPolyfill;
    use ConstantNames;
    use VariableDumping;

    /**
     * Associative array of tags and their attributes.
     *
     * @var array<string,array>
     */
    private $css = [];

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
        $namespace->addUse('AmpProject\\Attribute');
        $namespace->addUse('AmpProject\\Format');

        $tagsTemplateClass = ClassType::withBodiesFrom(Template\Css::class);
        foreach ($tagsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }

        $class->addProperty('css')
              ->setPrivate()
              ->addComment('@var array<array>');

        $class->addProperty('byFormat')
              ->setPrivate()
              ->addComment('@var array<array>');

        $byFormat = [];

        $constructor = $class->addMethod('__construct');

        $constructor->addBody('$this->css = [');

        foreach ($spec as $ruleSet) {
            $name = $this->getNameForRuleSet($ruleSet);

            $constructor->addBody("    '{$name}' => [");
            $indent = '        ';

            foreach ($ruleSet as $key => $value) {
                switch ($key) {
                    case 'disabledBy':
                    case 'enabledBy':
                        $attributeArray = [];
                        foreach ($value as $attribute) {
                            $constant  = $this->getAttributeConstant($this->getConstantName($attribute));
                            $attribute = $constant === $attribute
                                ? "'{$attribute}'"
                                : $constant;
                            $attributeArray[] = $attribute;
                        }
                        $constructor->addBody(
                            "{$indent}{$this->dumpWithKey($key, $attributeArray, 3, [$this, 'filterValueStrings'])}"
                        );
                        break;
                    case 'htmlFormat':
                        $formats = [];
                        foreach ($value as $format) {
                            $constant = $this->getFormatConstant($format);
                            $formats[] = $constant === $format ? "'{$format}'" : $constant;
                        }
                        $constructor->addBody(
                            "{$indent}{$this->dumpWithKey($key, $formats, 3, [$this, 'filterValueStrings'])}"
                        );
                        break;
                    default:
                        $constructor->addBody("{$indent}{$this->dumpWithKey($key, $value, 3)}");
                }
            }
            $constructor->addBody('    ],');

            if (array_key_exists('htmlFormat', $ruleSet)) {
                foreach ($ruleSet['htmlFormat'] as $format) {
                    if (!array_key_exists($format, $byFormat)) {
                        $byFormat[$format] = [];
                    }

                    $byFormat[$format][] = $name;
                }
            }
        }
        $constructor->addBody('];');

        $constructor->addBody('$this->byFormat = [');
        foreach ($byFormat as $format => $ruleSetNames) {
            $constant = $this->getFormatConstant($this->getConstantName($format));
            $constructor->addBody("    {$constant} => [");
            foreach ($ruleSetNames as $ruleSetName) {
                $constructor->addBody("        \$this->css['{$ruleSetName}'],");
            }
            $constructor->addBody('    ],');
        }
        $constructor->addBody('];');
    }

    /**
     * Get the name for a given ruleset.
     *
     * @param array $ruleSet Rule set to get the name for.
     * @return string Name to use for the rule set.
     */
    private function getNameForRuleSet($ruleSet)
    {
        static $index = 1;

        if (!array_key_exists('htmlFormat', $ruleSet) || count($ruleSet['htmlFormat']) === 0) {
            $name = "ruleset-{$index}";
            $index++;

            return $name;
        }

        $name = $ruleSet['htmlFormat'][0];

        if (array_key_exists('enabledBy', $ruleSet) && count($ruleSet['enabledBy']) > 0) {
            $name .= " ({$ruleSet['enabledBy'][0]})";
        }

        if (array_key_exists('disabledBy', $ruleSet) && count($ruleSet['disabledBy']) > 0) {
            $name .= " (no-{$ruleSet['disabledBy'][0]})";
        }

        return $name;
    }
}
