<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class LinkRel extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::LINK,
        SpecRule::SPEC_NAME => 'link rel=',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'href',
            ],
            [
                SpecRule::NAME => 'rel',
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(canonical|components|import|manifest|preload|serviceworker|stylesheet|subresource)(\s|$)',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'common-link-attrs',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
        SpecRule::DISALLOWED_ANCESTOR => [
            'TEMPLATE',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
