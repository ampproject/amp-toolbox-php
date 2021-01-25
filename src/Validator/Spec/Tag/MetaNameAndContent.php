<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class MetaNameAndContent extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::META,
        SpecRule::SPEC_NAME => 'meta name= and content=',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'content',
            ],
            [
                SpecRule::NAME => 'itemprop',
            ],
            [
                SpecRule::NAME => 'name',
                SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(amp-.*|amp4ads-.*|apple-itunes-app|content-disposition|revisit-after|viewport)(\s|$)',
            ],
            [
                SpecRule::NAME => 'property',
            ],
            [
                SpecRule::NAME => 'scheme',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
