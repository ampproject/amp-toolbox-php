#!/usr/bin/env php
<?php

use AmpProject\Tooling\Validator\SpecGenerator;

require dirname(__DIR__) . '/vendor/autoload.php';

$specGenerator = new SpecGenerator();
$destination   = !empty($argv[1]) ? $argv[1] : dirname(__DIR__) . '/src/Validator';

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

recursivelyRemoveDirectory($destination);

try {
    $specGenerator->generate(
        json_decode(file_get_contents('https://cdn.ampproject.org/v0/validator.json'), true),
        'AmpProject\Validator',
        $destination
    );
} catch (Exception $exception) {
    echo 'ERROR: ' . $exception->getMessage();
    exit -1;
}
