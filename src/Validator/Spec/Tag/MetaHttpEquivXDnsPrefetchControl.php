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

final class MetaHttpEquivXDnsPrefetchControl extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::META,
        SpecRule::SPEC_NAME => 'meta http-equiv=x-dns-prefetch-control',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CONTENT,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_CASEI => [
                    'off',
                    'on',
                ],
            ],
            [
                SpecRule::NAME => Attribute::HTTP_EQUIV,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'x-dns-prefetch-control',
                ],
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
        SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
