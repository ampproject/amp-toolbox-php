<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryGridLayerAnimateIn extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-STORY-GRID-LAYER animate-in',
        SpecRule::ATTRS => [
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
                SpecRule::NAME => 'target',
                SpecRule::VALUE => [
                    '_blank',
                ],
            ],
            [
                SpecRule::NAME => 'data-tooltip-icon',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                        Protocol::DATA,
                    ],
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
