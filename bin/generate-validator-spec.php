#!/usr/bin/env php
<?php

use AmpProject\Tooling\Validator\SpecGenerator;

require dirname(__DIR__) . '/vendor/autoload.php';

if (! class_exists('Nette\PhpGenerator\ClassType')) {
    echo "ERROR: The optional package nette/php-generator is needed for code generation.\n";
    echo "Install the package via the following Composer command:\n";
    echo "composer require --dev nette/php-generator:^3.5\n";
    exit -1;
}

$specGenerator = new SpecGenerator();
$destination   = !empty($argv[1]) ? $argv[1] : dirname(__DIR__) . '/src/Validator';
$spec_url      = 'https://cdn.ampproject.org/v0/validator.json';

function recursivelyRemoveDirectory($directory)
{
    if (is_dir($directory)) {
        $objects = scandir($directory);

        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                $filePath = "{$directory}/{$object}";

                if (is_dir($filePath) && ! is_link($filePath)) {
                    recursivelyRemoveDirectory($filePath);
                } else {
                    unlink($filePath);
                }
            }
        }

        rmdir($directory);
    }
}

try {
    echo "Recursively removing $destination";
    recursivelyRemoveDirectory($destination);
    echo "\n";

    echo "Fetching $spec_url...";
    $json = file_get_contents('https://cdn.ampproject.org/v0/validator.json');
    echo "\n";

    $data = json_decode($json, true);
    if (json_last_error()) {
        echo " JSON parse error: " . json_last_error_msg() . "\n";
        exit -1;
    }

    echo 'Generating spec';
    $specGenerator->generate(
        json_decode($json, true),
        'AmpProject\Validator',
        $destination
    );
    echo "\n";

    echo "Done!\n";
} catch (Exception $exception) {
    echo 'ERROR: ' . $exception->getMessage() . "\n";
    exit -1;
}
