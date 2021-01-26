<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryAutoAds extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_AUTO_ADS,
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Extension::STORY,
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story-auto-ads/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::STORY_AUTO_ADS,
        ],
    ];
}
