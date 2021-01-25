<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class NoscriptEnclosureForBoilerplateTransformed extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::NOSCRIPT,
        SpecRule::SPEC_NAME => 'noscript enclosure for boilerplate (transformed)',
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::ENABLED_BY => [
            'transformed',
        ],
        SpecRule::DESCRIPTIVE_NAME => 'noscript enclosure for boilerplate',
    ];
}
