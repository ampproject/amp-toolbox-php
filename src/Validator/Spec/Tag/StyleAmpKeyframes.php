<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class StyleAmpKeyframes
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::STYLE,\nSpecRule::SPEC_NAME => 'style[amp-keyframes]',\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::BODY,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AMP_KEYFRAMES,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n],\nSpecRule::CDATA => [\n                SpecRule::MAX_BYTES => 500000,\n                SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#keyframes-stylesheet',\n                SpecRule::CSS_SPEC => [\n                    'atRuleSpec' => [\n                        [\n                            'name' => 'keyframes',\n                        ],\n                        [\n                            'name' => 'media',\n                        ],\n                        [\n                            'name' => 'supports',\n                        ],\n                    ],\n                    'validateKeyframes' => true,\n                    'declaration' => [\n                        'animation-timing-function',\n                        'offset-distance',\n                        'opacity',\n                        'transform',\n                        'visibility',\n                    ],\n                ],\n                SpecRule::DOC_CSS_BYTES => false,\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::MANDATORY_LAST_CHILD => true,\nSpecRule::DESCRIPTIVE_NAME => 'style[amp-keyframes]',\n];";
}
