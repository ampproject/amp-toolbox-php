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

final class AmpPanZoom extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::PAN_ZOOM,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'disable-double-tap',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'initial-scale',
                SpecRule::VALUE_REGEX => '[0-9]+(\.[0-9]+)?',
            ],
            [
                SpecRule::NAME => 'initial-x',
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => 'initial-y',
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => 'max-scale',
                SpecRule::VALUE_REGEX => '[0-9]+(\.[0-9]+)?',
            ],
            [
                SpecRule::NAME => 'reset-on-resize',
                SpecRule::VALUE => [
                    '',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::PAN_ZOOM,
        ],
    ];
}
