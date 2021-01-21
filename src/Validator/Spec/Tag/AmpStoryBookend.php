<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryBookend
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_BOOKEND,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::LAYOUT,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'nodisplay',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'http',\n                            'https',\n                        ],\n                    ],\n    ],\n],\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::DESCENDANT_TAG_LIST => 'amp-story-bookend-allowed-descendants',\nSpecRule::MANDATORY_LAST_CHILD => true,\n];";
}
