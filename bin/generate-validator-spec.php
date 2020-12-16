#!/usr/bin/env php
<?php

use AmpProject\Tooling\Validator\SpecGenerator;

require dirname(__DIR__) . '/vendor/autoload.php';

$specGenerator = new SpecGenerator();

try {
    $specGenerator->generate(
        json_decode(file_get_contents('https://cdn.ampproject.org/v0/validator.json'), true),
        'AmpProject\Validator',
        dirname(__DIR__) . '/src/Validator'
    );
} catch (Exception $exception) {
    echo 'ERROR: ' . $exception->getMessage();
    exit -1;
}
