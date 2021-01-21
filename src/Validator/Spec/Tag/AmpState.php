<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpState
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STATE,\nSpecRule::SPEC_NAME => 'amp-state',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CREDENTIALS,\n    ],\n    [\n        SpecRule::NAME => Attribute::OVERRIDABLE,\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => true,\n                    ],\n    ],\n    [\n        SpecRule::NAME => '[SRC]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'mandatory-id-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bind/',\nSpecRule::CHILD_TAGS => [\n                'firstChildTagNameOneof' => [\n                    'SCRIPT',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-bind',\n            ],\n];";
}
