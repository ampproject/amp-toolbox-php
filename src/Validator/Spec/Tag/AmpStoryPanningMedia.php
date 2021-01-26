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

final class AmpStoryPanningMedia extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_PANNING_MEDIA,
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story-panning-media',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::STORY_PANNING_MEDIA,
        ],
    ];
}
