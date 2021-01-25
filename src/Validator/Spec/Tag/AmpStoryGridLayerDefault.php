<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryGridLayerDefault extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-STORY-GRID-LAYER default',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'align-content',
                SpecRule::VALUE => [
                    'center',
                    'end',
                    'space-around',
                    'space-between',
                    'space-evenly',
                    'start',
                    'stretch',
                ],
            ],
            [
                SpecRule::NAME => 'target',
                SpecRule::VALUE => [
                    '_blank',
                ],
            ],
            [
                SpecRule::NAME => 'data-tooltip-icon',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'http',
                        'https',
                        'data',
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'align-items',
                SpecRule::VALUE => [
                    'center',
                    'end',
                    'start',
                    'stretch',
                ],
            ],
            [
                SpecRule::NAME => 'align-self',
                SpecRule::VALUE => [
                    'center',
                    'end',
                    'start',
                    'stretch',
                ],
            ],
            [
                SpecRule::NAME => 'animate-in',
                SpecRule::VALUE => [
                    'drop',
                    'fade-in',
                    'fly-in-bottom',
                    'fly-in-left',
                    'fly-in-right',
                    'fly-in-top',
                    'pan-down',
                    'pan-left',
                    'pan-right',
                    'pan-up',
                    'pulse',
                    'rotate-in-left',
                    'rotate-in-right',
                    'scale-fade-down',
                    'scale-fade-up',
                    'twirl-in',
                    'whoosh-in-left',
                    'whoosh-in-right',
                    'zoom-in',
                    'zoom-out',
                ],
            ],
            [
                SpecRule::NAME => 'animate-in-after',
            ],
            [
                SpecRule::NAME => 'animate-in-delay',
            ],
            [
                SpecRule::NAME => 'animate-in-duration',
            ],
            [
                SpecRule::NAME => 'animate-in-timing-function',
            ],
            [
                SpecRule::NAME => 'grid-area',
            ],
            [
                SpecRule::NAME => 'interactive',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'scale-end',
                SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
            ],
            [
                SpecRule::NAME => 'scale-start',
                SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
            ],
            [
                SpecRule::NAME => 'translate-x',
                SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
            ],
            [
                SpecRule::NAME => 'translate-y',
                SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
            ],
            [
                SpecRule::NAME => 'justify-content',
                SpecRule::VALUE => [
                    'center',
                    'end',
                    'space-around',
                    'space-between',
                    'space-evenly',
                    'start',
                    'stretch',
                ],
            ],
            [
                SpecRule::NAME => 'justify-items',
                SpecRule::VALUE => [
                    'center',
                    'end',
                    'start',
                    'stretch',
                ],
            ],
            [
                SpecRule::NAME => 'justify-self',
                SpecRule::VALUE => [
                    'center',
                    'end',
                    'start',
                    'stretch',
                ],
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story/',
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
