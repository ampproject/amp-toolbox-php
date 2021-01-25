<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class ImgIAmphtmlIntrinsicSizer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::IMG,
        SpecRule::SPEC_NAME => 'IMG-I-AMPHTML-INTRINSIC-SIZER',
        SpecRule::MANDATORY_PARENT => Internal::SIZER_INTRINSIC,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'alt',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'aria-hidden',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'class',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'i-amphtml-intrinsic-sizer',
                ],
            ],
            [
                SpecRule::NAME => 'role',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'presentation',
                ],
            ],
            [
                SpecRule::NAME => 'src',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => 'data:image\/svg\+xml;charset=utf-8,\s*<svg height="\d+(\.\d+)?" width="\d+(\.\d+)?" xmlns="http:\/\/www\.w3\.org\/2000\/svg" version="1\.1"\/>|data:image\/svg\+xml;charset=utf-8,\s*<svg height=\'\d+(\.\d+)?\' width=\'\d+(\.\d+)?\' xmlns=\'http:\/\/www\.w3\.org\/2000\/svg\' version=\'1\.1\'\/>|data:image\/svg\+xml;base64,[a-zA-Z0-9+\/=]+',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::ENABLED_BY => [
            'transformed',
        ],
    ];
}
