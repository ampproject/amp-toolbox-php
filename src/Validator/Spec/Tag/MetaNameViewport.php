<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class MetaNameViewport extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::META,
        SpecRule::SPEC_NAME => 'meta name=viewport',
        SpecRule::MANDATORY => true,
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'content',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_PROPERTIES => [
                    'properties' => [
                        [
                            'name' => 'width',
                            'mandatory' => true,
                            'value' => 'device-width',
                        ],
                        [
                            'name' => 'height',
                        ],
                        [
                            'name' => 'initial-scale',
                        ],
                        [
                            'name' => 'minimum-scale',
                        ],
                        [
                            'name' => 'maximum-scale',
                        ],
                        [
                            'name' => 'shrink-to-fit',
                        ],
                        [
                            'name' => 'user-scalable',
                        ],
                        [
                            'name' => 'viewport-fit',
                        ],
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'name',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'viewport',
                ],
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'meta name=viewport',
    ];
}
