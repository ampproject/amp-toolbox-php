<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryPlayerImg extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::IMG,
        SpecRule::SPEC_NAME => 'amp-story-player > img',
        SpecRule::MANDATORY_PARENT => Element::A,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALT,
            ],
            [
                SpecRule::NAME => Attribute::ATTRIBUTION,
            ],
            [
                SpecRule::NAME => Attribute::DATA_AMP_STORY_PLAYER_POSTER_IMG,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
            ],
            [
                SpecRule::NAME => Attribute::DECODING,
                SpecRule::VALUE => [
                    'async',
                ],
            ],
            [
                SpecRule::NAME => Attribute::HEIGHT,
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => Attribute::LOADING,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'lazy',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SIZES,
            ],
            [
                SpecRule::NAME => Attribute::WIDTH,
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-src-or-srcset',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story-player/',
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PLAYER,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
