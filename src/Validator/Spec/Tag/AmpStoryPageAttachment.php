<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryPageAttachment
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_PAGE_ATTACHMENT,\nSpecRule::SPEC_NAME => 'amp-story-page-attachment',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::LAYOUT,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'nodisplay',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::THEME,\n        SpecRule::VALUE => [\n                        'dark',\n                        'light',\n                    ],\n    ],\n],\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::DESCENDANT_TAG_LIST => 'amp-story-page-attachment-allowed-descendants',\nSpecRule::MANDATORY_LAST_CHILD => true,\n];";
}
