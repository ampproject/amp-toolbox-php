<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryAutoAnalytics extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_AUTO_ANALYTICS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::GTAG_ID,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[A-Z]{1,2}-[A-Z0-9-]+',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::STORY_AUTO_ANALYTICS,
        ],
    ];
}
