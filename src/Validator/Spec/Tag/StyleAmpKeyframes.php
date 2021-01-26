<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class StyleAmpKeyframes extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::STYLE,
        SpecRule::SPEC_NAME => 'style[amp-keyframes]',
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::BODY,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'amp-keyframes',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
        ],
        SpecRule::CDATA => [
            SpecRule::MAX_BYTES => 500000,
            SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#keyframes-stylesheet',
            SpecRule::CSS_SPEC => [
                'atRuleSpec' => [
                    [
                        'name' => 'keyframes',
                    ],
                    [
                        'name' => 'media',
                    ],
                    [
                        'name' => 'supports',
                    ],
                ],
                'validateKeyframes' => true,
                'declaration' => [
                    'animation-timing-function',
                    'offset-distance',
                    'opacity',
                    'transform',
                    'visibility',
                ],
            ],
            SpecRule::DOC_CSS_BYTES => false,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::MANDATORY_LAST_CHILD => true,
        SpecRule::DESCRIPTIVE_NAME => 'style[amp-keyframes]',
    ];
}
