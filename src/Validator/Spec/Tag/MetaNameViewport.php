<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class MetaNameViewport
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::META,\nSpecRule::SPEC_NAME => 'meta name=viewport',\nSpecRule::MANDATORY => true,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CONTENT,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_PROPERTIES => [\n                        'properties' => [\n                            [\n                                'name' => 'width',\n                                'mandatory' => true,\n                                'value' => 'device-width',\n                            ],\n                            [\n                                'name' => 'height',\n                            ],\n                            [\n                                'name' => 'initial-scale',\n                            ],\n                            [\n                                'name' => 'minimum-scale',\n                            ],\n                            [\n                                'name' => 'maximum-scale',\n                            ],\n                            [\n                                'name' => 'shrink-to-fit',\n                            ],\n                            [\n                                'name' => 'user-scalable',\n                            ],\n                            [\n                                'name' => 'viewport-fit',\n                            ],\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::NAME,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'viewport',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'meta name=viewport',\n];";
}
