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

final class AmpJwplayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::JWPLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'autoplay',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'data-media-id',
                SpecRule::VALUE_REGEX_CASEI => '[0-9a-z]{8}|outstream',
                SpecRule::MANDATORY_ONEOF => '[\'data-media-id\', \'data-playlist-id\']',
            ],
            [
                SpecRule::NAME => 'data-player-id',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX_CASEI => '[0-9a-z]{8}',
            ],
            [
                SpecRule::NAME => 'data-playlist-id',
                SpecRule::VALUE_REGEX_CASEI => '[0-9a-z]{8}',
                SpecRule::MANDATORY_ONEOF => '[\'data-media-id\', \'data-playlist-id\']',
            ],
            [
                SpecRule::NAME => 'dock',
                SpecRule::REQUIRES_EXTENSION => [
                    Extension::VIDEO_DOCKING,
                ],
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-jwplayer/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::JWPLAYER,
        ],
    ];
}
