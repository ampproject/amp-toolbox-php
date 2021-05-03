<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmpVideoCommon extends AttributeList
{
    /** @var string */
    const ID = 'amp-video-common';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::ALBUM => [],
        Attribute::ALT => [],
        Attribute::ARTIST => [],
        Attribute::ARTWORK => [],
        Attribute::ATTRIBUTION => [],
        Attribute::AUTOPLAY => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::CONTROLS => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::CONTROLSLIST => [],
        Attribute::CROSSORIGIN => [],
        Attribute::DISABLEREMOTEPLAYBACK => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::DOCK => [
            SpecRule::REQUIRES_EXTENSION => [
                Extension::VIDEO_DOCKING,
            ],
        ],
        Attribute::LOOP => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::MUTED => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::NOAUDIO => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::OBJECT_FIT => [],
        Attribute::OBJECT_POSITION => [],
        Attribute::PLACEHOLDER => [],
        Attribute::PRELOAD => [
            SpecRule::VALUE => [
                'auto',
                'metadata',
                'none',
                '',
            ],
        ],
        Attribute::ROTATE_TO_FULLSCREEN => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::SRC => [
            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
            SpecRule::VALUE_URL => [
                SpecRule::PROTOCOL => [
                    Protocol::HTTPS,
                ],
                SpecRule::ALLOW_RELATIVE => true,
            ],
        ],
        '[ALBUM]' => [],
        '[ALT]' => [],
        '[ARTIST]' => [],
        '[ARTWORK]' => [],
        '[ATTRIBUTION]' => [],
        '[CONTROLS]' => [],
        '[CONTROLSLIST]' => [],
        '[LOOP]' => [],
        '[POSTER]' => [],
        '[PRELOAD]' => [],
        '[SRC]' => [],
        '[TITLE]' => [],
    ];
}
