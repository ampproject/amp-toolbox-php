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

final class AmpAudioA4a extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::AUDIO,
        SpecRule::SPEC_NAME => 'amp-audio (A4A)',
        SpecRule::ATTR_LISTS => [
            'amp-audio-common',
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::NODISPLAY,
            ],
            'definesDefaultWidth' => true,
            'definesDefaultHeight' => true,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4ADS,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-audio',
        ],
    ];
}
