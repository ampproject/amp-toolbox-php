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

final class TrackAttrsSubtitles extends AttributeList
{
    /** @var string */
    const ID = 'track-attrs-subtitles';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::DEFAULT_ => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::KIND => [
            SpecRule::MANDATORY => true,
            SpecRule::VALUE_CASEI => [
                'subtitles',
            ],
        ],
        Attribute::LABEL => [],
        Attribute::SRC => [
            SpecRule::MANDATORY => true,
            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
            SpecRule::VALUE_URL => [
                SpecRule::PROTOCOL => [
                    Protocol::HTTPS,
                ],
                SpecRule::ALLOW_RELATIVE => false,
            ],
        ],
        Attribute::SRCLANG => [
            SpecRule::MANDATORY => true,
        ],
    ];
}
