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

final class AmpDailymotion extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::DAILYMOTION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'autoplay',
            ],
            [
                SpecRule::NAME => 'data-endscreen-enable',
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'data-info',
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'data-mute',
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'data-sharing-enable',
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'data-start',
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => 'data-ui-highlight',
                SpecRule::VALUE_REGEX_CASEI => '([0-9a-f]{3}){1,2}',
            ],
            [
                SpecRule::NAME => 'data-ui-logo',
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'data-videoid',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX_CASEI => '[a-z0-9]+',
            ],
            [
                SpecRule::NAME => 'dock',
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
