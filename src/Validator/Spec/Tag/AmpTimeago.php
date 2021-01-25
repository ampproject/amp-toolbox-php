<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpTimeago extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::TIMEAGO,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'cutoff',
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => 'datetime',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d(:[0-5]\d(\.\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',
            ],
            [
                SpecRule::NAME => 'locale',
            ],
            [
                SpecRule::NAME => '[datetime]',
            ],
            [
                SpecRule::NAME => '[title]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-timeago/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4EMAIL,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-timeago',
        ],
    ];
}
