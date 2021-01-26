<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
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
                SpecRule::NAME => Attribute::CONTENT,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_PROPERTIES => [
                    'properties' => [
                        [
                            SpecRule::NAME => 'width',
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => 'device-width',
                        ],
                        [
                            SpecRule::NAME => 'height',
                        ],
                        [
                            SpecRule::NAME => 'initial-scale',
                        ],
                        [
                            SpecRule::NAME => 'minimum-scale',
                        ],
                        [
                            SpecRule::NAME => 'maximum-scale',
                        ],
                        [
                            SpecRule::NAME => 'shrink-to-fit',
                        ],
                        [
                            SpecRule::NAME => 'user-scalable',
                        ],
                        [
                            SpecRule::NAME => 'viewport-fit',
                        ],
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::NAME,
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
