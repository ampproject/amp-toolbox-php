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
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpTwitter extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::TWITTER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_CARDS,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TWEETID,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_CONVERSATION,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TWEETID,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_LIMIT,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_MOMENTID,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_MOMENTID,
                SpecRule::MANDATORY_ONEOF => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_TIMELINE_ID,
                SpecRule::VALUE_REGEX => '\d+',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_TIMELINE_OWNER_SCREEN_NAME,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_TIMELINE_SLUG,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_TIMELINE_SOURCE_TYPE,
                SpecRule::MANDATORY_ONEOF => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
            ],
            [
                SpecRule::NAME => Attribute::DATA_TIMELINE_SCREEN_NAME,
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_TIMELINE_URL,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_TIMELINE_USER_ID,
                SpecRule::VALUE_REGEX => '\d+',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_TWEETID,
                SpecRule::MANDATORY_ONEOF => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
            ],
            [
                SpecRule::NAME => '[data-tweetid]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::TWITTER,
        ],
    ];
}
