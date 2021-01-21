<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpEmbedlyCard
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::EMBEDLY_CARD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_URL,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-embedly-card/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-embedly-card',\n            ],\n];";
}
