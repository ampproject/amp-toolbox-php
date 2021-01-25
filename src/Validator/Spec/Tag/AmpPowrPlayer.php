<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpPowrPlayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::POWR_PLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'autoplay',
            ],
            [
                SpecRule::NAME => 'data-account',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',
            ],
            [
                SpecRule::NAME => 'data-player',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',
            ],
            [
                SpecRule::NAME => '[data-referrer]',
            ],
            [
                SpecRule::NAME => 'data-terms',
                SpecRule::MANDATORY_ONEOF => '[\'data-video\', \'data-terms\']',
            ],
            [
                SpecRule::NAME => 'data-video',
                SpecRule::MANDATORY_ONEOF => '[\'data-video\', \'data-terms\']',
                SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-powr-player/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-powr-player',
        ],
    ];
}
