<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpCallTracking
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::CALL_TRACKING,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CONFIG,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-call-tracking/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::CONTAINER,\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 1,\n                'childTagNameOneof' => [\n                    'A',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-call-tracking',\n            ],\n];";
}
