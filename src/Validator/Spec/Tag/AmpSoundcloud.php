<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpSoundcloud extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::SOUNDCLOUD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-color',
                SpecRule::VALUE_REGEX_CASEI => '([0-9a-f]{3}){1,2}',
            ],
            [
                SpecRule::NAME => 'data-playlistid',
                SpecRule::MANDATORY_ONEOF => '[\'data-trackid\', \'data-playlistid\']',
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => 'data-secret-token',
                SpecRule::VALUE_REGEX => '[A-Za-z0-9_-]+',
            ],
            [
                SpecRule::NAME => 'data-trackid',
                SpecRule::MANDATORY_ONEOF => '[\'data-trackid\', \'data-playlistid\']',
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
            [
                SpecRule::NAME => 'data-visual',
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
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
            Extension::SOUNDCLOUD,
        ],
    ];
}
