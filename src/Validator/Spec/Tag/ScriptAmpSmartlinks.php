<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class ScriptAmpSmartlinks
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SCRIPT,\nSpecRule::ATTR_LISTS => [\n                'common-extension-attrs',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::SATISFIES => [\n                'amp-smartlinks',\n            ],\nSpecRule::EXTENSION_SPEC => [\n                'name' => 'amp-smartlinks',\n                'version' => [\n                    '0.1',\n                    'latest',\n                ],\n            ],\nSpecRule::EXCLUDES => [\n                'amp-link-rewriter',\n                'amp-skimlinks',\n            ],\n];";
}
