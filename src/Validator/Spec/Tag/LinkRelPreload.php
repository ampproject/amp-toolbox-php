<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class LinkRelPreload
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::LINK,\nSpecRule::SPEC_NAME => 'link rel=preload',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AS_,\n    ],\n    [\n        SpecRule::NAME => Attribute::HREF,\n    ],\n    [\n        SpecRule::NAME => Attribute::REL,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'preload',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::IMAGESRCSET,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'http',\n                            'https',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::IMAGESIZES,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'common-link-attrs',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',\nSpecRule::DISALLOWED_ANCESTOR => [\n                'TEMPLATE',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'link rel=preload',\n];";
}
