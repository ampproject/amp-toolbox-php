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

final class AmpVideoIframeCommon extends AttributeList
{
    /** @var string */
    const ID = 'amp-video-iframe-common';

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
        Attribute::DOCK => [
            SpecRule::REQUIRES_EXTENSION => [
                Extension::VIDEO_DOCKING,
            ],
        ],
        Attribute::IMPLEMENTS_MEDIA_SESSION => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::IMPLEMENTS_ROTATE_TO_FULLSCREEN => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::POSTER => [],
        Attribute::REFERRERPOLICY => [],
        Attribute::ROTATE_TO_FULLSCREEN => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::SRC => [
            SpecRule::MANDATORY => true,
            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
            SpecRule::VALUE_URL => [
                SpecRule::PROTOCOL => [
                    Protocol::HTTPS,
                ],
            ],
        ],
        '[SRC]' => [],
    ];
}
