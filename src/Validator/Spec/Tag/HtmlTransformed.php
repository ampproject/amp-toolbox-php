<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class HtmlTransformed extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::HTML,
        SpecRule::SPEC_NAME => 'html (transformed)',
        SpecRule::MANDATORY => true,
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::_DOCTYPE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'i-amphtml-layout',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'i-amphtml-no-boilerplate',
                SpecRule::VALUE => [
                    '',
                ],
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::ENABLED_BY => [
            'transformed',
        ],
    ];
}
