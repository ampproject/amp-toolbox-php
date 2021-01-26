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

final class AmpPowrPlayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::POWR_PLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOPLAY,
            ],
            [
                SpecRule::NAME => Attribute::DATA_ACCOUNT,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_PLAYER,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',
            ],
            [
                SpecRule::NAME => '[data-referrer]',
            ],
            [
                SpecRule::NAME => Attribute::DATA_TERMS,
                SpecRule::MANDATORY_ONEOF => '[\'data-video\', \'data-terms\']',
            ],
            [
                SpecRule::NAME => Attribute::DATA_VIDEO,
                SpecRule::MANDATORY_ONEOF => '[\'data-video\', \'data-terms\']',
                SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-powr-player/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
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
            Extension::POWR_PLAYER,
        ],
    ];
}
