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

final class Errors implements Section
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
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Error");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Iteration");

        $class->addImplement("{$fileManager->getRootNamespace()}\\Spec\\IterableSection");
        $class->addTrait(
            "{$fileManager->getRootNamespace()}\\Spec\\Iteration",
            ['Iteration::current as parentCurrent']
        );

        $class->addProperty('errors')
              ->setValue([])
              ->setPrivate()
              ->addComment("Cache of instantiated Error objects.\n\n@var array<Spec\\Error>");

        $errors = [];
        foreach ($spec as $key => $value) {
            $className = $this->generateErrorSpecificClass($key, $value, $fileManager);

            $errors["Error\\{$className}::CODE"] = "Error\\{$className}::class";
        }
        $class->addConstant('ERRORS', $errors)
              ->addComment("Mapping of error code to error implementation.\n\n@var array<string>");

        $errorsTemplateClass = ClassType::withBodiesFrom(Template\Errors::class);
        foreach ($errorsTemplateClass->getMethods() as $method) {
            $class->addMember($method);
        }
        $class->addComment($errorsTemplateClass->getComment());
    }

    /**
     * Generate the Error-specific class file.
     *
     * @param string      $errorCode   Code of the error to generate the class for.
     * @param array       $jsonSpec    Array of spec data for the error.
     * @param FileManager $fileManager File manager instance to use.
     * @return string Short name of the class that was generated.
     */
    private function generateErrorSpecificClass($errorCode, $jsonSpec, FileManager $fileManager)
    {
        list($file, $namespace) = $fileManager->createNewNamespacedFile('Spec\\Error');

        $className = $this->getClassNameFromId($errorCode);

        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\SpecRule");
        $namespace->addUse("{$fileManager->getRootNamespace()}\\Spec\\Error");

        /** @var ClassType $class */
        $class = $namespace->addClass($className)
                           ->setFinal()
                           ->addExtend('AmpProject\Validator\Spec\Error');

        $class->addConstant('CODE', $errorCode)
              ->addComment("Code of the error.\n\n@var string");

        $class->addConstant('SPEC', $jsonSpec)
              ->addComment("Array of spec data.\n\n@var array<array>");

        $classComment = "Error class {$className}.\n\n";
        $classComment .= "@package ampproject/amp-toolbox.\n\n";
        $classComment .= implode("\n", $this->getMagicPropertyAnnotations($jsonSpec));
        $class->addComment($classComment);

        $fileManager->saveFile($file, "Spec/Error/{$className}.php");

        return $className;
    }
}
