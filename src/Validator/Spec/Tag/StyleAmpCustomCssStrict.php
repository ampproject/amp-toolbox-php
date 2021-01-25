<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class StyleAmpCustomCssStrict extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::STYLE,
        SpecRule::SPEC_NAME => 'style amp-custom (css-strict)',
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
                ],
                'selectorSpec' => [
                    'attributeName' => [
                        'active',
                        'alt',
                        'autocomplete',
                        'autoexpand',
                        'checked',
                        'class',
                        'controls',
                        'dir',
                        'disabled',
                        'expanded',
                        'fallback',
                        'fetch-error',
                        'height',
                        'hidden',
                        'id',
                        'items',
                        'layout',
                        'name',
                        'noloading',
                        'novalidate',
                        'open',
                        'option',
                        'overflow',
                        'placeholder',
                        'readonly',
                        'required',
                        'role',
                        'scrollable',
                        'selected',
                        'side',
                        'sizes',
                        'submit-error',
                        'submit-success',
                        'submitting',
                        'title',
                        'type',
                        'value',
                        'width',
                    ],
                    'pseudoClass' => [
                        'active',
                        'checked',
                        'default',
                        'disabled',
                        'empty',
                        'enabled',
                        'first-child',
                        'first-of-type',
                        'focus',
                        'focus-within',
                        'hover',
                        'in-range',
                        'indeterminate',
                        'invalid',
                        'last-child',
                        'last-of-type',
                        'not',
                        'nth-child',
                        'nth-last-child',
                        'nth-last-of-type',
                        'nth-of-type',
                        'only-child',
                        'only-of-type',
                        'optional',
                        'out-of-range',
                        'read-only',
                        'read-write',
                        'required',
                        'valid',
                    ],
                ],
            ],
            SpecRule::DOC_CSS_BYTES => true,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::ENABLED_BY => [
            'data-css-strict',
        ],
        SpecRule::DESCRIPTIVE_NAME => 'style amp-custom',
    ];
}
