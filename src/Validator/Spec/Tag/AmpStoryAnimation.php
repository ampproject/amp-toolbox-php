<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryAnimation
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_ANIMATION,\nSpecRule::MANDATORY_PARENT => Extension::STORY_PAGE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ANIMATE_IN_AFTER,\n    ],\n    [\n        SpecRule::NAME => Attribute::TRIGGER,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'visibility',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 1,\n                'childTagNameOneof' => [\n                    'SCRIPT',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES => [\n                'amp-story-animation json script',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-story',\n            ],\n];";
}
