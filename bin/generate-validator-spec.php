#!/usr/bin/env php
<?php

use AmpProject\Tooling\Validator\SpecGenerator;

require dirname(__DIR__) . '/vendor/autoload.php';

$specGenerator = new SpecGenerator();

$specGenerator->generate(
    json_decode(file_get_contents('https://cdn.ampproject.org/v0/validator.json')),
    dirname(__DIR__) . '/src/Validator/Spec'
);
