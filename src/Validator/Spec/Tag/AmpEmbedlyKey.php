<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpEmbedlyKey
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::EMBEDLY_KEY,\nSpecRule::UNIQUE => true,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::VALUE,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-embedly-card',\n            ],\n];";
}
