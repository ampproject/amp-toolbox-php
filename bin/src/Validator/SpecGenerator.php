<?php

namespace AmpProject\Tooling\Validator;

use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\Template;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Printer;
use Nette\PhpGenerator\PsrPrinter;

final class SpecGenerator
{
    use ConstantNames;

    /**
     * Namespace under which to find the spec generator files.
     *
     * @var string
     */
    const GENERATOR_NAMESPACE = 'AmpProject\\Tooling\\Validator\\SpecGenerator';

    /**
     * Generate the PHP spec from a JSON definition.
     *
     * @param array  $jsonSpec      Validator spec as defined by the downloaded JSON file.
     * @param string $rootNamespace Root namespace to generate the PHP validator spec under.
     * @param string $destination   Destination folder to store the PHP validator spec under.
     */
    public function generate($jsonSpec, $rootNamespace, $destination)
    {
        $printer = new PsrPrinter();
        $printer->setTypeResolving(false);

        $this->ensureDirectoriesExist($destination);

        $specFile      = $this->createNewFile();
        $specNamespace = $specFile->addNamespace($rootNamespace);
        $specClass     = $specNamespace->addClass('Spec')
                                       ->setFinal();

        $specNamespace->addUse("{$rootNamespace}\\Spec");

        $this->generateTagClass($rootNamespace, $destination, $printer);
        $this->generateErrorCodeInterface($jsonSpec, $rootNamespace, $destination, $printer);

        foreach ($jsonSpec as $section => $sectionSpec) {
            $sectionClassName = $this->generateSectionClass(
                $section,
                $sectionSpec,
                $rootNamespace,
                $destination,
                $printer
            );

            $specClass->addProperty($section)
                      ->setPrivate()
                      ->addComment("@var Spec\\Section\\{$sectionClassName}");

            $specClass->addMethod($section)
                      ->addBody('if ($this->? === null) {', [$section])
                      ->addBody("    \$this->? = new Spec\\Section\\{$sectionClassName}();", [$section])
                      ->addBody('}')
                      ->addBody('return $this->?;', [$section])
                      ->addComment("@return Spec\\Section\\{$sectionClassName}");
        }

        file_put_contents("{$destination}/Spec.php", $printer->printFile($specFile));
    }

    /**
     * Create a new PHP file.
     *
     * This creates the standard file header.
     *
     * @return PhpFile New PHP file.
     */
    private function createNewFile()
    {
        $file = new PhpFile();

        $file->addComment('DO NOT EDIT!');
        $file->addComment('This file was automatically generated via bin/generate-validator-spec.php.');

        return $file;
    }

    /**
     * Get the class name for a given value.
     *
     * @param string $value Value to get the class name for.
     * @return string Class name to use.
     */
    private function getClassName($value)
    {
        return ucfirst($value);
    }

    /**
     * Ensure all the required subfolders exist.
     *
     * @param string $destination Destination folder to create the subfolders in.
     */
    private function ensureDirectoriesExist($destination)
    {
        $folders = [
            "{$destination}/Spec",
            "{$destination}/Spec/Section",
        ];

        foreach ($folders as $folder) {
            if (!is_dir($folder)) {
                mkdir($folder);
            }
        }
    }

    /**
     * Generate the Tag class.
     *
     * @param string  $rootNamespace Root namespace to generate the PHP validator spec under.
     * @param string  $destination   Destination folder to store the PHP validator spec under.
     * @param Printer $printer       Source code printer instance to use.
     */
    private function generateTagClass($rootNamespace, $destination, Printer $printer)
    {
        $tagFile      = $this->createNewFile();
        $tagNamespace = $tagFile->addNamespace("{$rootNamespace}\\Spec");
        $tagClass     = ClassType::withBodiesFrom(Template\Tag::class);
        $tagNamespace->add($tagClass);
        file_put_contents("{$destination}/Spec/Tag.php", $printer->printFile($tagFile));
    }

    /**
     * Generate a Section class.
     *
     * @param string  $section       Key of the section to generate.
     * @param mixed   $sectionSpec   Spec data of the section to be generated.
     * @param string  $rootNamespace Root namespace to generate the PHP validator spec under.
     * @param string  $destination   Destination folder to store the PHP validator spec under.
     * @param Printer $printer       Source code printer instance to use.
     * @return string Section class name.
     */
    private function generateSectionClass($section, $sectionSpec, $rootNamespace, $destination, Printer $printer)
    {
        $sectionFile      = $this->createNewFile();
        $sectionNamespace = $sectionFile->addNamespace("{$rootNamespace}\\Spec\\Section");
        $sectionClassName = $this->getClassName($section);
        $sectionClass     = $sectionNamespace->addClass($sectionClassName)
                                             ->setFinal();

        $sectionProcessorClass = self::GENERATOR_NAMESPACE . "\\Section\\{$sectionClassName}";

        if (class_exists($sectionProcessorClass)) {
            /** @var Section $sectionProcessor */
            $sectionProcessor = new $sectionProcessorClass();
            $sectionProcessor->process($rootNamespace, $sectionSpec, $sectionNamespace, $sectionClass);
        }

        file_put_contents(
            "{$destination}/Spec/Section/{$sectionClassName}.php",
            $printer->printFile($sectionFile)
        );

        return $sectionClassName;
    }

    /**
     * Generate the ErrorCode interface.
     *
     * @param array   $jsonSpec      JSON spec that contains the spec details.
     * @param string  $rootNamespace Root namespace to generate the PHP validator spec under.
     * @param string  $destination   Destination folder to store the PHP validator spec under.
     * @param Printer $printer       Source code printer instance to use.
     */
    private function generateErrorCodeInterface($jsonSpec, $rootNamespace, $destination, Printer $printer)
    {
        $errorCodeFile      = $this->createNewFile();
        $errorCodeNamespace = $errorCodeFile->addNamespace($rootNamespace);
        $errorCodeInterface = $errorCodeNamespace->addInterface('ErrorCode');

        $errorCodes = array_unique(
            array_merge(
                array_column($jsonSpec['errorFormats'], 'code'),
                array_column($jsonSpec['errorSpecificity'], 'code')
            )
        );

        sort($errorCodes);

        foreach ($errorCodes as $errorCode) {
            $errorCodeInterface->addConstant($this->getConstantName($errorCode), $errorCode);
        }

        file_put_contents("{$destination}/ErrorCode.php", $printer->printFile($errorCodeFile));
    }
}
