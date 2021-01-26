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

final class AmpDailymotion extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::DAILYMOTION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOPLAY,
            ],
            [
                SpecRule::NAME => Attribute::DATA_ENDSCREEN_ENABLE,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_INFO,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_MUTE,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_SHARING_ENABLE,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_START,
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_UI_HIGHLIGHT,
                SpecRule::VALUE_REGEX_CASEI => '([0-9a-f]{3}){1,2}',
            ],
            [
                SpecRule::NAME => Attribute::DATA_UI_LOGO,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_VIDEOID,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX_CASEI => '[a-z0-9]+',
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
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-dailymotion/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::DAILYMOTION,
        ],
    ];
}
