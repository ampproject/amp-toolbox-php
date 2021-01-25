<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpAudioTrackKindSubtitles extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TRACK,
        SpecRule::SPEC_NAME => 'amp-audio > track[kind=subtitles]',
        SpecRule::MANDATORY_PARENT => Extension::AUDIO,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => '[label]',
            ],
            [
                SpecRule::NAME => '[src]',
            ],
            [
                SpecRule::NAME => '[srclang]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'track-attrs-subtitles',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
