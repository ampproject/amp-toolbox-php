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

final class CssRulesets implements Section
{
    use ArrayKeyFirstPolyfill;
    use ClassNames;
    use ConstantNames;

    /**
     * Associative array of CSS rulesets and their attributes.
     *
     * @var array<string,array>
     */
    private $css = [];

    /**
     * Dumper instance to use.
     *
     * @var Dumper
     */
    private $dumper;

    /**
     * CssRulesets constructor.
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
        $cssRulesets      = [];
        $byFormat         = [];

        $namespace->addUse("LogicException");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Iteration");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\CssRuleset");

        $cssRulesetsTemplateClass = ClassType::withBodiesFrom(Template\CssRulesets::class);
        foreach ($cssRulesetsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }

        $class->addImplement("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $class->addTrait(
            "{$fileManager->getRootNamespace()}\\Spec\\Iteration",
            ['Iteration::current as parentCurrent']
        );

        $class->addProperty('cssRulesetsCache')
              ->setPrivate()
              ->addComment("Cache of instantiated CssRuleset objects.\n\n@var array<CssRuleset>")
              ->setValue([]);

        $class->addProperty('iterationArray')
              ->setPrivate()
              ->addComment("Array used for storing the iteration index in.\n\n@var array<string>|null");

        foreach ($spec as $attributes) {
            $cssRulesetId               = $this->getNameForRuleset($attributes);
            $cssRulesets[$cssRulesetId] = $attributes;
        }

        $cssRulesetIds = array_keys($cssRulesets);
        natcasesort($cssRulesetIds);

        $rulesets = [];
        foreach ($cssRulesetIds as $cssRulesetId) {
            $cssRulesetIdString = "CssRuleset\\{$this->getClassNameFromId($cssRulesetId)}::ID";

            $className = $this->generateCssRulesetSpecificClass(
                $cssRulesetId,
                $cssRulesets[$cssRulesetId],
                $fileManager
            );

            $rulesets["CssRuleset\\{$className}::ID"] = "CssRuleset\\{$className}::class";

            if (array_key_exists('htmlFormat', $cssRulesets[$cssRulesetId])) {
                $formats = $cssRulesets[$cssRulesetId]['htmlFormat'];
                foreach ($formats as $format) {
                    $format = $this->getFormatConstant($this->getConstantName($format));
                    if (!array_key_exists($format, $byFormat)) {
                        $byFormat[$format] = [];
                    }
                    $byFormat[$format][] = $cssRulesetIdString;
                }
            }
        }

        $class->addConstant('CSS_RULESETS', $rulesets)
              ->addComment("Mapping of CSS ruleset ID to CSS ruleset implementation.\n\n@var array<string>");

        $class->addConstant('BY_FORMAT', $byFormat)
              ->addComment(
                  "Mapping of AMP format to array of CSS ruleset IDs.\n\n"
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
     * Generate the CSS ruleset-specific class file.
     *
     * @param string      $ruleset     ID of the CSS ruleset to generate the class for.
     * @param array       $jsonSpec    Array of spec data for the CSS ruleset.
     * @param FileManager $fileManager File manager instance to use.
     */
    private function generateCssRulesetSpecificClass($ruleset, $jsonSpec, FileManager $fileManager)
    {
        list($file, $namespace) = $fileManager->createNewNamespacedFile('Spec\\CssRuleset');

        $className = $this->getClassNameFromId($ruleset);

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\SpecRule");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\CssRuleset");

        /** @var ClassType $class */
        $class = $namespace->addClass($className)
                           ->setFinal()
                           ->addExtend('AmpProject\Validator\Spec\CssRuleset');

        $class->addConstant('ID', $ruleset)
              ->addComment("ID of the ruleset.\n\n@var string");

        $class->addConstant('SPEC', $jsonSpec)
              ->addComment("Array of spec rules.\n\n@var array");

        $fileManager->saveFile($file, "Spec/CssRuleset/{$className}.php");

        return $className;
    }
}
