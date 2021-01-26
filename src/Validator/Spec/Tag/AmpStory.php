<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStory extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY,
        SpecRule::MANDATORY_PARENT => Element::BODY,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::BACKGROUND_AUDIO,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::ENTITY,
            ],
            [
                SpecRule::NAME => Attribute::ENTITY_LOGO_SRC,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::ENTITY_URL,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::POSTER_LANDSCAPE_SRC,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::POSTER_PORTRAIT_SRC,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::POSTER_SQUARE_SRC,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::PUBLISHER,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::PUBLISHER_LOGO_SRC,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::STANDALONE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SUPPORTS_LANDSCAPE,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::TITLE,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::LIVE_STORY,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::LIVE_STORY_DISABLED,
                SpecRule::VALUE => [
                    '',
                ],
            ],
        ],
        SpecRule::CHILD_TAGS => [
            SpecRule::CHILD_TAG_NAME_ONEOF => [
                'AMP-ANALYTICS',
                'AMP-CONSENT',
                'AMP-GEO',
                'AMP-PIXEL',
                'AMP-SIDEBAR',
                'AMP-STORY-AUTO-ADS',
                'AMP-STORY-BOOKEND',
                'AMP-STORY-PAGE',
            ],
            SpecRule::MANDATORY_MIN_NUM_CHILD_TAGS => 1,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES => [
            'amp-story-page',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::STORY,
        ],
        SpecRule::SIBLINGS_DISALLOWED => true,
    ];
}
