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

final class AmpOrientationObserver extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::ORIENTATION_OBSERVER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'alpha-range',
                SpecRule::VALUE_REGEX => '(\d+)\s{1}(\d+)',
            ],
            [
                SpecRule::NAME => 'beta-range',
                SpecRule::VALUE_REGEX => '(\d+)\s{1}(\d+)',
            ],
            [
                SpecRule::NAME => 'gamma-range',
                SpecRule::VALUE_REGEX => '(\d+)\s{1}(\d+)',
            ],
            [
                SpecRule::NAME => 'smoothing',
                SpecRule::VALUE_REGEX => '[0-9]+|',
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
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::ORIENTATION_OBSERVER,
        ],
    ];
}
