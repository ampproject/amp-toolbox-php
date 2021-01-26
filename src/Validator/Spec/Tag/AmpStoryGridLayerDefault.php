<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryGridLayerDefault extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-STORY-GRID-LAYER default',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALIGN_CONTENT,
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
                SpecRule::NAME => Attribute::TARGET,
                SpecRule::VALUE => [
                    '_blank',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_TOOLTIP_ICON,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                        Protocol::DATA,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::ALIGN_ITEMS,
                SpecRule::VALUE => [
                    'center',
                    'end',
                    'start',
                    'stretch',
                ],
            ],
            [
                SpecRule::NAME => Attribute::ALIGN_SELF,
                SpecRule::VALUE => [
                    'center',
                    'end',
                    'start',
                    'stretch',
                ],
            ],
            [
                SpecRule::NAME => Attribute::ANIMATE_IN,
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
                SpecRule::NAME => Attribute::ANIMATE_IN_AFTER,
            ],
            [
                SpecRule::NAME => Attribute::ANIMATE_IN_DELAY,
            ],
            [
                SpecRule::NAME => Attribute::ANIMATE_IN_DURATION,
            ],
            [
                SpecRule::NAME => Attribute::ANIMATE_IN_TIMING_FUNCTION,
            ],
            [
                SpecRule::NAME => Attribute::GRID_AREA,
            ],
            [
                SpecRule::NAME => Attribute::INTERACTIVE,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SCALE_END,
                SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
            ],
            [
                SpecRule::NAME => Attribute::SCALE_START,
                SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
            ],
            [
                SpecRule::NAME => Attribute::TRANSLATE_X,
                SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
            ],
            [
                SpecRule::NAME => Attribute::TRANSLATE_Y,
                SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
            ],
            [
                SpecRule::NAME => Attribute::JUSTIFY_CONTENT,
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
                SpecRule::NAME => Attribute::JUSTIFY_ITEMS,
                SpecRule::VALUE => [
                    'center',
                    'end',
                    'start',
                    'stretch',
                ],
            ],
            [
                SpecRule::NAME => Attribute::JUSTIFY_SELF,
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
