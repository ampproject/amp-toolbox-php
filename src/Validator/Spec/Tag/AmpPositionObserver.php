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

final class AmpPositionObserver extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::POSITION_OBSERVER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'intersection-ratios',
                SpecRule::VALUE_REGEX => '^([0]*?\.\d*$|1$|0$)|([0]*?\.\d*|1|0)\s{1}([0]*?\.\d*$|1$|0$)',
            ],
            [
                SpecRule::NAME => 'once',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'target',
            ],
            [
                SpecRule::NAME => 'viewport-margins',
                SpecRule::VALUE_REGEX => '^(\d+$|\d+px$|\d+vh$)|((\d+|\d+px|\d+vh)\s{1}(\d+$|\d+px$|\d+vh$))',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::POSITION_OBSERVER,
        ],
    ];
}
