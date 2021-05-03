<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmpCarouselCommon extends AttributeList
{
    /** @var string */
    const ID = 'amp-carousel-common';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::ARROWS => [
            SpecRule::VALUE => [
                '',
            ],
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        Attribute::AUTOPLAY => [
            SpecRule::VALUE_REGEX => '(|[0-9]+)',
        ],
        Attribute::CONTROLS => [],
        Attribute::DELAY => [
            SpecRule::VALUE_REGEX => '[0-9]+',
        ],
        Attribute::DOTS => [
            SpecRule::VALUE => [
                '',
            ],
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        Attribute::LOOP => [
            SpecRule::VALUE => [
                '',
            ],
        ],
        Attribute::SLIDE => [
            SpecRule::VALUE_REGEX => '[0-9]+',
        ],
        Attribute::TYPE => [
            SpecRule::VALUE => [
                'carousel',
                'slides',
            ],
        ],
        '[SLIDE]' => [],
    ];
}
