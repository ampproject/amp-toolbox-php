<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class LinkRel
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::LINK,\nSpecRule::SPEC_NAME => 'link rel=',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::HREF,\n    ],\n    [\n        SpecRule::NAME => Attribute::REL,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\\s)(canonical|components|import|manifest|preload|serviceworker|stylesheet|subresource)(\\s|\$)',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'common-link-attrs',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',\nSpecRule::DISALLOWED_ANCESTOR => [\n                'TEMPLATE',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
