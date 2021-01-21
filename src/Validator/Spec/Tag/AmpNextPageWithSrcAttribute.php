<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpNextPageWithSrcAttribute
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::NEXT_PAGE,\nSpecRule::SPEC_NAME => 'amp-next-page with src attribute',\nSpecRule::UNIQUE => true,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DEEP_PARSING,\n    ],\n    [\n        SpecRule::NAME => Attribute::MAX_PAGES,\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::XSSI_PREFIX,\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-next-page/',\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-NEXT-PAGE > [separator]',\n                    'unique' => true,\n                ],\n                [\n                    'tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]',\n                    'unique' => true,\n                ],\n                [\n                    'tagSpecName' => 'AMP-NEXT-PAGE > [footer]',\n                    'unique' => true,\n                ],\n                [\n                    'tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]',\n                    'unique' => true,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-next-page',\n            ],\n];";
}
