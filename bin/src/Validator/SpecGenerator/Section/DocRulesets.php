<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ClassNames;
use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class DocRulesets implements Section
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
        $docRulesets      = [];
        $byFormat         = [];

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Iteration");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\DocRuleset");

        $docRulesetsTemplateClass = ClassType::withBodiesFrom(Template\DocRulesets::class);
        foreach ($docRulesetsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }
        $class->addComment($docRulesetsTemplateClass->getComment());

        $class->addImplement("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $class->addTrait(
            "{$fileManager->getRootNamespace()}\\Spec\\Iteration",
            ['Iteration::current as parentCurrent']
        );

        $class->addProperty('docRulesetsCache')
              ->setPrivate()
              ->addComment("Cache of instantiated DocRuleset objects.\n\n@var array<DocRuleset>")
              ->setValue([]);

        $class->addProperty('iterationArray')
              ->setPrivate()
              ->addComment("Array used for storing the iteration index in.\n\n@var array<string>|null");

        foreach ($spec as $attributes) {
            $docRulesetId               = $this->getNameForRuleset($attributes);
            $docRulesets[$docRulesetId] = $attributes;
        }

        $docRulesetIds = array_keys($docRulesets);
        natcasesort($docRulesetIds);

        $rulesets = [];
        foreach ($docRulesetIds as $docRulesetId) {
            $docRulesetIdString = "DocRuleset\\{$this->getClassNameFromId($docRulesetId)}::ID";

            $className = $this->generateDocRulesetSpecificClass(
                $docRulesetId,
                $docRulesets[$docRulesetId],
                $fileManager
            );

            $rulesets["DocRuleset\\{$className}::ID"] = "DocRuleset\\{$className}::class";

            if (array_key_exists('htmlFormat', $docRulesets[$docRulesetId])) {
                $formats = $docRulesets[$docRulesetId]['htmlFormat'];
                foreach ($formats as $format) {
                    $format = $this->getFormatConstant($this->getConstantName($format));
                    if (!array_key_exists($format, $byFormat)) {
                        $byFormat[$format] = [];
                    }
                    $byFormat[$format][] = $docRulesetIdString;
                }
            }
        }

        $class->addConstant('DOC_RULESETS', $rulesets)
              ->addComment("Mapping of document ruleset ID to document ruleset implementation.\n\n@var array<string>");

        $class->addConstant('BY_FORMAT', $byFormat)
              ->addComment(
                  "Mapping of AMP format to array of document ruleset IDs.\n\n"
                  . "This is used to optimize querying by AMP format.\n\n"
                  . "@var array<array<string>>"
              );
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

    /**
     * Generate the document ruleset-specific class file.
     *
     * @param string      $ruleset     ID of the document ruleset to generate the class for.
     * @param array       $jsonSpec    Array of spec data for the document ruleset.
     * @param FileManager $fileManager File manager instance to use.
     */
    private function generateDocRulesetSpecificClass($ruleset, $jsonSpec, FileManager $fileManager)
    {
        list($file, $namespace) = $fileManager->createNewNamespacedFile('Spec\\DocRuleset');

        $className = $this->getClassNameFromId($ruleset);

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\SpecRule");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\DocRuleset");

        /** @var ClassType $class */
        $class = $namespace->addClass($className)
                           ->setFinal()
                           ->addExtend('AmpProject\Validator\Spec\DocRuleset');

        $class->addConstant('ID', $ruleset)
              ->addComment("ID of the ruleset.\n\n@var string");

        $class->addConstant('SPEC', $jsonSpec)
              ->addComment("Array of spec rules.\n\n@var array");

        $fileManager->saveFile($file, "Spec/DocRuleset/{$className}.php");

        return $className;
    }
}
