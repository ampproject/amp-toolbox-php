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

final class LinkProperty extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::LINK,
        SpecRule::SPEC_NAME => 'link property=',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::HREF,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::PROPERTY,
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'common-link-attrs',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'link property=',
    ];
}
