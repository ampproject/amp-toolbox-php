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

final class AmpAudio extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::AUDIO,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOPLAY,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::PRELOAD,
                SpecRule::VALUE_CASEI => [
                    'auto',
                    'metadata',
                    'none',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'amp-audio-common',
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::NODISPLAY,
            ],
            SpecRule::DEFINES_DEFAULT_WIDTH => true,
            SpecRule::DEFINES_DEFAULT_HEIGHT => true,
        ],
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-STORY',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::AUDIO,
        ],
    ];
}
