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

final class AmpBridPlayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::BRID_PLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOPLAY,
            ],
            [
                SpecRule::NAME => Attribute::DATA_DYNAMIC,
                SpecRule::VALUE_REGEX => '[a-z]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_OUTSTREAM,
                SpecRule::MANDATORY_ONEOF => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_PARTNER,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_PLAYER,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_PLAYLIST,
                SpecRule::MANDATORY_ONEOF => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                SpecRule::VALUE_REGEX => '.+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_VIDEO,
                SpecRule::MANDATORY_ONEOF => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => Attribute::DOCK,
                SpecRule::REQUIRES_EXTENSION => [
                    Extension::VIDEO_DOCKING,
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-brid-player/',
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
            Extension::BRID_PLAYER,
        ],
    ];
}
