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

final class MetaNameAndContent extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::META,
        SpecRule::SPEC_NAME => 'meta name= and content=',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CONTENT,
            ],
            [
                SpecRule::NAME => Attribute::ITEMPROP,
            ],
            [
                SpecRule::NAME => Attribute::NAME,
                SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(amp-.*|amp4ads-.*|apple-itunes-app|content-disposition|revisit-after|viewport)(\s|$)',
            ],
            [
                SpecRule::NAME => Attribute::PROPERTY,
            ],
            [
                SpecRule::NAME => Attribute::SCHEME,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
