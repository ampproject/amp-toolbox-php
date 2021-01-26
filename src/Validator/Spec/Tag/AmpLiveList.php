<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpLiveList extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::LIVE_LIST,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_MAX_ITEMS_PER_PAGE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_POLL_INTERVAL,
                SpecRule::VALUE_REGEX => '\d{5,}',
            ],
            [
                SpecRule::NAME => Attribute::DISABLED,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SORT,
                SpecRule::VALUE => [
                    'ascending',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-id-attr',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
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
            Extension::LIVE_LIST,
        ],
    ];
}
