<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryConsent extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_CONSENT,
        SpecRule::MANDATORY_PARENT => Extension::CONSENT,
        SpecRule::ATTR_LISTS => [
            'mandatory-id-attr',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::CHILD_TAGS => [
            SpecRule::MANDATORY_NUM_CHILD_TAGS => 1,
            SpecRule::CHILD_TAG_NAME_ONEOF => [
                'SCRIPT',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES => [
            'amp-story-consent extension .json script',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::CONSENT,
            Extension::STORY,
        ],
    ];
}
