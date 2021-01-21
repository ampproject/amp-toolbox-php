<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class MetaNameAndContent
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::META,\nSpecRule::SPEC_NAME => 'meta name= and content=',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CONTENT,\n    ],\n    [\n        SpecRule::NAME => Attribute::ITEMPROP,\n    ],\n    [\n        SpecRule::NAME => Attribute::NAME,\n        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\\s)(amp-.*|amp4ads-.*|apple-itunes-app|content-disposition|revisit-after|viewport)(\\s|\$)',\n    ],\n    [\n        SpecRule::NAME => Attribute::PROPERTY,\n    ],\n    [\n        SpecRule::NAME => Attribute::SCHEME,\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\n];";
}
