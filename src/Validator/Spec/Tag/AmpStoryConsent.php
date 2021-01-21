<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryConsent
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_CONSENT,\nSpecRule::MANDATORY_PARENT => Extension::CONSENT,\nSpecRule::ATTR_LISTS => [\n                'mandatory-id-attr',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 1,\n                'childTagNameOneof' => [\n                    'SCRIPT',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES => [\n                'amp-story-consent extension .json script',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-consent',\n                'amp-story',\n            ],\n];";
}
