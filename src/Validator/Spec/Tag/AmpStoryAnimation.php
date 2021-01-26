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

final class AmpStoryAnimation extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_ANIMATION,
        SpecRule::MANDATORY_PARENT => Extension::STORY_PAGE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'animate-in-after',
            ],
            [
                SpecRule::NAME => 'trigger',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'visibility',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::CHILD_TAGS => [
            'mandatoryNumChildTags' => 1,
            'childTagNameOneof' => [
                'SCRIPT',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES => [
            'amp-story-animation json script',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-story',
        ],
    ];
}
