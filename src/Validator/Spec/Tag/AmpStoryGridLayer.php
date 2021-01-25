<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryGridLayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_GRID_LAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'template',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'fill',
                    'horizontal',
                    'thirds',
                    'vertical',
                ],
            ],
            [
                SpecRule::NAME => 'position',
                SpecRule::VALUE => [
                    'landscape-half-left',
                    'landscape-half-right',
                ],
            ],
            [
                SpecRule::NAME => 'aspect-ratio',
                SpecRule::VALUE_REGEX => '\d+:\d+',
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-STORY-GRID-LAYER default',
            ],
            [
                'tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCENDANT_TAG_LIST => 'amp-story-grid-layer-allowed-descendants',
    ];
}
