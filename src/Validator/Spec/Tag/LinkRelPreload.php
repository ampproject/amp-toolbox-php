<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class LinkRelPreload extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::LINK,
        SpecRule::SPEC_NAME => 'link rel=preload',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AS_,
            ],
            [
                SpecRule::NAME => Attribute::HREF,
            ],
            [
                SpecRule::NAME => Attribute::REL,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'preload',
                ],
            ],
            [
                SpecRule::NAME => Attribute::IMAGESRCSET,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::IMAGESIZES,
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
        SpecRule::DESCRIPTIVE_NAME => 'link rel=preload',
    ];
}
