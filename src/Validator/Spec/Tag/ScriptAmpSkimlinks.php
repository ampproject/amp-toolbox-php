<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class ScriptAmpSkimlinks
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SCRIPT,\nSpecRule::ATTR_LISTS => [\n                'common-extension-attrs',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::SATISFIES => [\n                'amp-skimlinks',\n            ],\nSpecRule::EXTENSION_SPEC => [\n                'name' => 'amp-skimlinks',\n                'version' => [\n                    '0.1',\n                    'latest',\n                ],\n            ],\nSpecRule::EXCLUDES => [\n                'amp-link-rewriter',\n                'amp-smartlinks',\n            ],\n];";
}
