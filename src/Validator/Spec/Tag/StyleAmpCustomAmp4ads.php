<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\AtRule;
use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class StyleAmpCustomAmp4ads extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::STYLE,
        SpecRule::SPEC_NAME => 'style amp-custom (AMP4ADS)',
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AMP_CUSTOM,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::VALUE_CASEI => [
                    'text/css',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'nonce-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/#css',
        SpecRule::CDATA => [
            SpecRule::MAX_BYTES => 20000,
            SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
            SpecRule::DISALLOWED_CDATA_REGEX => [
                [
                    'regex' => '<!--',
                    'errorMessage' => 'html comments',
                ],
                [
                    'regex' => '(^|\W)i-amphtml-',
                    'errorMessage' => 'CSS i-amphtml- name prefix',
                ],
            ],
            SpecRule::CSS_SPEC => [
                'atRuleSpec' => [
                    [
                        SpecRule::NAME => AtRule::FONT_FACE,
                    ],
                    [
                        SpecRule::NAME => AtRule::KEYFRAMES,
                    ],
                    [
                        SpecRule::NAME => AtRule::MEDIA,
                        'mediaQuerySpec' => [
                            'issuesAsError' => false,
                            'type' => [
                                'all',
                                'print',
                                'screen',
                                'speech',
                            ],
                            'feature' => [
                                'width',
                                'height',
                                'aspect-ratio',
                                'orientation',
                                'resolution',
                            ],
                        ],
                    ],
                    [
                        SpecRule::NAME => AtRule::SUPPORTS,
                    ],
                ],
                'validateAmp4ads' => true,
            ],
            SpecRule::DOC_CSS_BYTES => true,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4ADS,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'style amp-custom',
    ];
}
