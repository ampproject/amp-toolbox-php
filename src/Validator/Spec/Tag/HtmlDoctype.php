<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class HtmlDoctype extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::_DOCTYPE,
        SpecRule::SPEC_NAME => 'html doctype',
        SpecRule::MANDATORY => true,
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => '$ROOT',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'html',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'lang',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4EMAIL,
        ],
        SpecRule::EXPLICIT_ATTRS_ONLY => true,
        SpecRule::DESCRIPTIVE_NAME => 'html !doctype',
    ];
}
