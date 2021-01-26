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

final class StyleAmpCustomAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::STYLE,
        SpecRule::SPEC_NAME => 'style amp-custom (AMP4EMAIL)',
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'amp-custom',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'type',
                SpecRule::VALUE_CASEI => [
                    'text/css',
                ],
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
        SpecRule::CDATA => [
            SpecRule::MAX_BYTES => 75000,
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
                        'name' => 'media',
                        'mediaQuerySpec' => [
                            'issuesAsError' => true,
                            'type' => [
                                'all',
                                'screen',
                            ],
                            'feature' => [
                                'device-width',
                                'hover',
                                'max-device-width',
                                'max-resolution',
                                'max-width',
                                'min-device-width',
                                'min-resolution',
                                'min-width',
                                'orientation',
                                'pointer',
                                'resolution',
                                'width',
                            ],
                        ],
                    ],
                    [
                        'name' => 'page',
                    ],
                ],
            ],
            SpecRule::DOC_CSS_BYTES => true,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::DISABLED_BY => [
            'data-css-strict',
        ],
        SpecRule::DESCRIPTIVE_NAME => 'style amp-custom',
    ];
}
