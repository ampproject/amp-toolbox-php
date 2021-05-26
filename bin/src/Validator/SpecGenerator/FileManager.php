<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Printer;

final class FileManager
{

    /**
     * Directory that contains the source for the namespace root.
     *
     * @var string
     */
    const NAMESPACE_ROOT_FOLDER = __DIR__ . '/../../../../src';

    /**
     * Root namespace to generate the PHP validator spec under.
     *
     * @var string
     */
    private $rootNamespace;

    /**
     * Destination folder to store the PHP validator spec under.
     *
     * @var string
     */
    private $destination;

    /**
     * Printer instance to use.
     *
     * @var Printer
     */
    private $printer;

    /**
     * Dumper instance to use.
     *
     * @var Dumper
     */
    private $dumper;

    /**
     * FileManager constructor.
     *
     * @param string  $rootNamespace Root namespace to generate the PHP validator spec under.
     * @param string  $destination   Destination folder to store the PHP validator spec under.
     * @param Printer $printer       Printer instance to use.
     */
    public function __construct($rootNamespace, $destination, Printer $printer)
    {
        $this->rootNamespace = $rootNamespace;
        $this->destination   = $destination;
        $this->printer       = $printer;
        $this->dumper        = new Dumper();
    }

    /**
     * Ensure all the required subfolders exist.
     */
    public function ensureDirectoriesExist()
    {
        $folders = [
            $this->destination,
            "{$this->destination}/Spec",
            "{$this->destination}/Spec/AttributeList",
            "{$this->destination}/Spec/CssRuleset",
            "{$this->destination}/Spec/DocRuleset",
            "{$this->destination}/Spec/DeclarationList",
            "{$this->destination}/Spec/DescendantTagList",
            "{$this->destination}/Spec/Error",
            "{$this->destination}/Spec/Section",
            "{$this->destination}/Spec/Tag",
        ];

        foreach ($folders as $folder) {
            if (!is_dir($folder)) {
                mkdir($folder);
            }
        }
    }

    /**
     * Create a new PHP file.
     *
     * This creates the standard file header.
     *
     * @return PhpFile New PHP file.
     */
    public function createNewFile()
    {
        $file = new PhpFile();

        $file->addComment('DO NOT EDIT!');
        $file->addComment('This file was automatically generated via bin/generate-validator-spec.php.');

        return $file;
    }

    /**
     * Create a new PHP file with a namespace.
     *
     * This creates the standard file header.
     *
     * @param string $relativeNamespace Optional. Relative namespace to use for the new file.
     * @return array New PHP file and its namespace object.
     */
    public function createNewNamespacedFile($relativeNamespace = '')
    {
        $file = $this->createNewFile();

        $namespace = empty($relativeNamespace)
            ? $this->rootNamespace
            : "{$this->rootNamespace}\\{$relativeNamespace}";

        return [$file, $file->addNamespace($namespace)];
    }

    /**
     * Get the root namespace to use.
     *
     * @return string Root namespace.
     */
    public function getRootNamespace()
    {
        return $this->rootNamespace;
    }

    /**
     * Save a file to the filesystem.
     *
     * @param PhpFile $file             File to save.
     * @param string  $relativeFilePath Relative file path to use.
     */
    public function saveFile(PhpFile $file, $relativeFilePath)
    {
        $file = $this->addMissingImports($file);

        file_put_contents(
            "{$this->destination}/{$relativeFilePath}",
            $this->printer->printFile($file)
        );
    }

    /**
     * Add missing imports.
     *
     * @param PhpFile $file File to add the missing imports into.
     * @return PhpFile Adapted file.
     */
    private function addMissingImports(PhpFile $file)
    {
        foreach ($file->getNamespaces() as $namespace) {
            $classes = [];
            foreach ($namespace->getClasses() as $class) {
                foreach ($class->getConstants() as $constant) {
                    $source          = $this->dumper->dump($constant->getValue(), 0);
                    $constantClasses = $this->extractClassNames($source);
                    $classes         = array_merge($classes, $constantClasses);
                }

                foreach ($class->getMethods() as $method) {
                    $source        = $method->getBody();
                    if ($source === null) {
                        continue;
                    }
                    $methodClasses = $this->extractClassNames($source);
                    $method->setBody($this->adaptSource($source, $methodClasses));
                    $classes = array_merge($classes, $methodClasses);
                }

                $classes = array_merge($classes, $class->getExtends());
                $classes = array_merge($classes, $class->getImplements());
            }

            foreach (array_unique($classes) as $class) {
                $this->maybeAddImport($namespace, $class);
            }
        }

        return $file;
    }

    /**
     * Adapt the source file to reduce fully qualified class names to their short name.
     *
     * @param string        $source  Source to adapt.
     * @param array<string> $classes Array of class names.
     * @return string Adapted source.
     */
    private function adaptSource($source, $classes)
    {
        return str_replace(
            $classes,
            array_map([$this, 'getShortName'], $classes),
            $source
        );
    }

    /**
     * Extract class names from a source fragment.
     *
     * @param string $source Source fragment to extract class names from.
     * @return array<string> Array of class names.
     */
    private function extractClassNames($source)
    {
        $matches = [];
        if (!preg_match_all('/[\\\\\w]+::/', $source, $matches)) {
            return [];
        }

        $classes = [];
        foreach (array_unique($matches[0]) as $match) {
            $class = rtrim($match, '::');

            if (in_array($class, ['self', 'static'])) {
                continue;
            }

            $classes[] = $class;
        }

        return $classes;
    }

    /**
     * Add an import in case it is missing for a given namespace.
     *
     * @param PhpNamespace $namespace Namespace into which to add missing imports.
     * @param string       $class     Class to check whether its import is missing.
     */
    private function maybeAddImport(PhpNamespace $namespace, $class)
    {
        foreach ($namespace->getUses() as $alias => $import) {
            if ($import === $class) {
                return;
            }

            if ($import === ltrim($class, '\\')) {
                return;
            }

            if ($this->getShortName($import) === $class) {
                return;
            }

            $partials          = explode('\\', $class);
            $relativeNamespace = array_shift($partials);

            if ($this->getShortName($import) === $relativeNamespace) {
                return;
            }

            if ($alias === $this->getShortName($class)) {
                return;
            }
        }

        $fqcn  = $this->getFullyQualifiedName($class);
        $alias = null;

        if ($fqcn === 'AmpProject\\Element') {
            $fqcn  = 'AmpProject\\Tag';
            $alias = 'Element';
        }

        $namespace->addUse($fqcn, $alias);
    }

    /**
     * Get the short name for a provided class name.
     *
     * @param string $class Class name to get the short name for.
     * @return string Short name of the provided class name.
     */
    private function getShortName($class)
    {
        $class = ltrim($class, '\\');

        if (strpos($class, 'AmpProject\\') === 0) {
            $partials = array_filter(explode('\\', $class));
            $class    = array_pop($partials);
        }

        return $class;
    }

    /**
     * Get the fully qualified class name for a provided class name.
     *
     * @param string $class Class name to turn into a FQCN.
     * @return string Fully qualified class name.
     */
    private function getFullyQualifiedName($class)
    {
        $class = ltrim($class, '\\');

        if (strpos($class, 'AmpProject\\') === 0) {
            return $class;
        }

        if ($class === 'Element') {
            return "AmpProject\\Element";
        }

        if (strpos($class, 'Tag\\') === 0) {
            return "AmpProject\\Validator\\Spec\\Tag";
        }

        if (strpos($class, 'CssSpecRule\\') === 0) {
            return "AmpProject\\Validator\\Spec\\CssSpecRule";
        }

        if (strpos($class, 'DocSpecRule\\') === 0) {
            return "AmpProject\\Validator\\Spec\\DocSpecRule";
        }

        if (strpos($class, 'Error\\') === 0) {
            return "AmpProject\\Validator\\Spec\\Error";
        }

        if (strpos($class, 'AttributeList\\') === 0) {
            return "AmpProject\\Validator\\Spec\\AttributeList";
        }

        if (strpos($class, 'DeclarationList\\') === 0) {
            return "AmpProject\\Validator\\Spec\\DeclarationList";
        }

        if (strpos($class, 'DescendantTagList\\') === 0) {
            return "AmpProject\\Validator\\Spec\\DescendantTagList";
        }

        if (
            in_array(
                $class,
                [
                    'AttributeList',
                    'CssRuleset',
                    'DocRuleset',
                    'DeclarationList',
                    'DescendantTagList',
                    'Error',
                    'SpecRule'
                ],
                true
            )
        ) {
            return "AmpProject\\Validator\\Spec\\{$class}";
        }

        if (
            in_array(
                $class,
                [
                    'AttributeLists',
                    'CssRulesets',
                    'DocRulesets',
                    'DeclarationLists',
                    'DescendantTagLists',
                    'Errors',
                    'Tags'
                ],
                true
            )
        ) {
            return "AmpProject\\Validator\\Spec\\Section\\{$class}";
        }

        if (file_exists(self::NAMESPACE_ROOT_FOLDER . "/{$class}.php")) {
            return "AmpProject\\{$class}";
        }

        return $class;
    }
}
