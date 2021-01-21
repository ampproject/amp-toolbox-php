<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Printer;

final class FileManager
{

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
    }

    /**
     * Ensure all the required subfolders exist.
     */
    public function ensureDirectoriesExist()
    {
        $folders = [
            $this->destination,
            "{$this->destination}/Spec",
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
     * Get the destination folder to use.
     *
     * @return string Destination folder.
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Get the printer instance to use.
     *
     * @return Printer Printer instance.
     */
    public function getPrinter()
    {
        return $this->printer;
    }

    /**
     * Save a file to the filesystem.
     *
     * @param PhpFile $file             File to save.
     * @param string  $relativeFilePath Relative file path to use.
     */
    public function saveFile(PhpFile $file, $relativeFilePath)
    {
        file_put_contents(
            "{$this->destination}/{$relativeFilePath}",
            $this->printer->printFile($file)
        );
    }
}
