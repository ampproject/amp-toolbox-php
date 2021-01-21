<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryPageAttachmentHref
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_PAGE_ATTACHMENT,\nSpecRule::SPEC_NAME => 'amp-story-page-attachment[href]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::LAYOUT,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'nodisplay',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::THEME,\n        SpecRule::VALUE => [\n                        'dark',\n                        'light',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::HREF,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'http',\n                            'https',\n                        ],\n                    ],\n    ],\n],\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 0,\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::MANDATORY_LAST_CHILD => true,\n];";
}
