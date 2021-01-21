<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class LinkItemprop
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::LINK,\nSpecRule::SPEC_NAME => 'link itemprop=',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::HREF,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::ITEMPROP,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'common-link-attrs',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'link itemprop=',\n];";
}
