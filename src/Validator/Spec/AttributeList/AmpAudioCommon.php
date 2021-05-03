<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmpAudioCommon extends AttributeList
{
    /** @var string */
    const ID = 'amp-audio-common';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::ALBUM => [],
        Attribute::ARTIST => [],
        Attribute::ARTWORK => [],
        Attribute::CONTROLS => [],
        Attribute::CONTROLSLIST => [],
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
        '[ARTIST]' => [],
        '[ARTWORK]' => [],
        '[CONTROLSLIST]' => [],
        '[LOOP]' => [],
        '[SRC]' => [],
        '[TITLE]' => [],
    ];
}
