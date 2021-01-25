<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpLiveList extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::LIVE_LIST,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-max-items-per-page',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => 'data-poll-interval',
                SpecRule::VALUE_REGEX => '\d{5,}',
            ],
            [
                SpecRule::NAME => 'disabled',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'sort',
                SpecRule::VALUE => [
                    'ascending',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-id-attr',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::CONTAINER,
                Layout::FIXED_HEIGHT,
            ],
        ],
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-LIVE-LIST [update]',
                SpecRule::MANDATORY => true,
                SpecRule::UNIQUE => true,
            ],
            [
                'tagSpecName' => 'AMP-LIVE-LIST [items]',
                SpecRule::MANDATORY => true,
                SpecRule::UNIQUE => true,
            ],
            [
                'tagSpecName' => 'AMP-LIVE-LIST [pagination]',
                SpecRule::UNIQUE => true,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-live-list',
        ],
    ];
}
