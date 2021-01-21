<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class MetaHttpEquivXDnsPrefetchControl
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::META,\nSpecRule::SPEC_NAME => 'meta http-equiv=x-dns-prefetch-control',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CONTENT,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_CASEI => [\n                        'off',\n                        'on',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::HTTP_EQUIV,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'x-dns-prefetch-control',\n                    ],\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',\nSpecRule::MANDATORY_ANCESTOR => Element::HEAD,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\n];";
}
