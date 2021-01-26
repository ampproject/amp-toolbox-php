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

final class StyleAmpCustomAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::STYLE,
        SpecRule::SPEC_NAME => 'style amp-custom (AMP4EMAIL)',
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
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
        SpecRule::CDATA => [
            SpecRule::MAX_BYTES => 75000,
            SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
            SpecRule::DISALLOWED_CDATA_REGEX => [
                [
                    SpecRule::REGEX => '<!--',
                    SpecRule::ERROR_MESSAGE => 'html comments',
                ],
                [
                    SpecRule::REGEX => '(^|\W)i-amphtml-',
                    SpecRule::ERROR_MESSAGE => 'CSS i-amphtml- name prefix',
                ],
            ],
            SpecRule::CSS_SPEC => [
                SpecRule::AT_RULE_SPEC => [
                    [
                        SpecRule::NAME => AtRule::MEDIA,
                        SpecRule::MEDIA_QUERY_SPEC => [
                            SpecRule::ISSUES_AS_ERROR => true,
                            SpecRule::TYPE => [
                                'all',
                                'screen',
                            ],
                            SpecRule::FEATURE => [
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
                        SpecRule::NAME => AtRule::PAGE,
                    ],
                ],
            ],
            SpecRule::DOC_CSS_BYTES => true,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::DISABLED_BY => [
            Attribute::DATA_CSS_STRICT,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'style amp-custom',
    ];
}
