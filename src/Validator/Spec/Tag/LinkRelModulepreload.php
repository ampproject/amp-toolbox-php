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

final class LinkRelModulepreload extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::LINK,
        SpecRule::SPEC_NAME => 'link rel=modulepreload',
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AS_,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'script',
                ],
            ],
            [
                SpecRule::NAME => Attribute::CROSSORIGIN,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'anonymous',
                ],
            ],
            [
                SpecRule::NAME => Attribute::HREF,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '.*\.mjs$',
            ],
            [
                SpecRule::NAME => Attribute::REL,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'modulepreload',
                ],
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'link rel=modulepreload',
    ];
}
