<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

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
                SpecRule::NAME => 'background-audio',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'entity',
            ],
            [
                SpecRule::NAME => 'entity-logo-src',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'entity-url',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'poster-landscape-src',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'poster-portrait-src',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'poster-square-src',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'publisher',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'publisher-logo-src',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'standalone',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'supports-landscape',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'title',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'live-story',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'live-story-disabled',
                SpecRule::VALUE => [
                    '',
                ],
            ],
        ],
        SpecRule::CHILD_TAGS => [
            'childTagNameOneof' => [
                'AMP-ANALYTICS',
                'AMP-CONSENT',
                'AMP-GEO',
                'AMP-PIXEL',
                'AMP-SIDEBAR',
                'AMP-STORY-AUTO-ADS',
                'AMP-STORY-BOOKEND',
                'AMP-STORY-PAGE',
            ],
            'mandatoryMinNumChildTags' => 1,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES => [
            'amp-story-page',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-story',
        ],
        SpecRule::SIBLINGS_DISALLOWED => true,
    ];
}
