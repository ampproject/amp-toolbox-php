<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpNextPageWithInlineConfig
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::NEXT_PAGE,\nSpecRule::SPEC_NAME => 'amp-next-page with inline config',\nSpecRule::UNIQUE => true,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DEEP_PARSING,\n    ],\n    [\n        SpecRule::NAME => Attribute::MAX_PAGES,\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-next-page/',\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-NEXT-PAGE > [separator]',\n                    'unique' => true,\n                ],\n                [\n                    'tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]',\n                    'unique' => true,\n                ],\n                [\n                    'tagSpecName' => 'AMP-NEXT-PAGE > [footer]',\n                    'unique' => true,\n                ],\n                [\n                    'tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]',\n                    'mandatory' => true,\n                    'unique' => true,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-next-page',\n            ],\n];";
}
