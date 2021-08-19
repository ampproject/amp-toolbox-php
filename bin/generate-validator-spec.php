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

$specGenerator      = new SpecGenerator();
$destination        = !empty($argv[1]) ? $argv[1] : dirname(__DIR__) . '/src/Validator';
$spec_url           = 'https://cdn.ampproject.org/v0/validator.json';
$latest_release_url = 'https://api.github.com/repos/ampproject/amphtml/releases/latest';
$bundle_config_url  = 'https://raw.githubusercontent.com/ampproject/amphtml/%s'
                      . '/build-system/compile/bundles.config.extensions.json';

/**
 * Recursively remove an entire directory and all of its files/subdirectories.
 *
 * @param string $directory Directory to remove.
 */
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

/**
 * Fetch JSON data from URL.
 *
 * @param string $url   JSON URL.
 * @param bool   $cache Whether to cache response in temp directory.
 *
 * @return array Data.
 * @throws RuntimeException         When the JSON file cannot be fetched.
 * @throws RuntimeException         When the JSON data cannot be parsed.
 * @throws UnexpectedValueException When the JSON data is not an array.
 */
function fetch_json($url, $cache = false)
{
    $stream_context = stream_context_create([
        'http' => [
            'user_agent' => 'amp-toolbox-php-generate-validator-spec/0.1',
        ],
    ]);

    $json       = null;
    $cache_file = sys_get_temp_dir() . '/amp-toolbox-php-' . md5($url);
    if ($cache) {
        if (file_exists($cache_file)) {
            $json = file_get_contents($cache_file);
        }
    }

    if ($json === null || $json === false) {
        $json = file_get_contents($url, false, $stream_context);
    }

    if ($json === false) {
        throw new RuntimeException('Failed to retrieve the JSON file at: ' . $url);
    }

    $data = json_decode($json, true);
    if (json_last_error()) {
        throw new RuntimeException('JSON parse error: ' . json_last_error_msg());
    }
    if (!is_array($data)) {
        throw new UnexpectedValueException('Expected an associative array.');
    }

    if ($cache) {
        file_put_contents($cache_file, $json);
    }

    return $data;
}

try {
    $cache = ! empty($_ENV['CACHE_FETCHES']);

    echo "Recursively removing $destination";
    recursivelyRemoveDirectory($destination);
    echo "\n";

    echo "Fetching {$spec_url}...";
    $spec_data = fetch_json($spec_url, $cache);
    echo "\n";

    echo "Fetching {$latest_release_url}...";
    $latest_release = fetch_json($latest_release_url, $cache);
    if (!isset($latest_release['name'])) {
        echo " Missing release name\n";
        exit -1;
    }
    echo "\n";

    $latest_bundle_config_url = sprintf($bundle_config_url, $latest_release['name']);
    echo "Fetching {$latest_bundle_config_url}...";
    $bundle_config = fetch_json($latest_bundle_config_url, $cache);
    echo "\n";

    echo 'Generating spec';
    $specGenerator->generate(
        $spec_data,
        $bundle_config,
        'AmpProject\Validator',
        $destination
    );
    echo "\n";

    echo "Done!\n";
} catch (Exception $exception) {
    echo 'ERROR: ' . $exception->getMessage() . "\n";
    exit -1;
}
