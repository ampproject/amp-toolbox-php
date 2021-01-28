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

final class AmpStoryGridLayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_GRID_LAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ANCHOR,
                SpecRule::VALUE_REGEX => 'top|bottom|left|right|(top|bottom)[ -](left|right)|(left|right)[ -](top|bottom)',
            ],
            [
                SpecRule::NAME => Attribute::ASPECT_RATIO,
                SpecRule::VALUE_REGEX => '\d+:\d+',
            ],
            [
                SpecRule::NAME => Attribute::POSITION,
                SpecRule::VALUE => [
                    'landscape-half-left',
                    'landscape-half-right',
                ],
            ],
            [
                SpecRule::NAME => Attribute::PRESET,
                SpecRule::VALUE => [
                    '2021-background',
                    '2021-foreground',
                ],
            ],
            [
                SpecRule::NAME => Attribute::TEMPLATE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'fill',
                    'horizontal',
                    'thirds',
                    'vertical',
                ],
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,
        SpecRule::REFERENCE_POINTS => [
            [
                SpecRule::TAG_SPEC_NAME => 'AMP-STORY-GRID-LAYER default',
            ],
            [
                SpecRule::TAG_SPEC_NAME => 'AMP-STORY-GRID-LAYER animate-in',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCENDANT_TAG_LIST => 'amp-story-grid-layer-allowed-descendants',
    ];
}
