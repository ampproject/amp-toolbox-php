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
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpSpringboardPlayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::SPRINGBOARD_PLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_CONTENT_ID,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::DATA_DOMAIN,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::DATA_ITEMS,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::DATA_MODE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_CASEI => [
                    'playlist',
                    'video',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_PLAYER_ID,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX_CASEI => '[a-z0-9]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_SITE_ID,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FLEX_ITEM,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::SPRINGBOARD_PLAYER,
        ],
    ];
}
