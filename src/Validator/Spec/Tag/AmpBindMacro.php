<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpBindMacro extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::BIND_MACRO,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'arguments',
            ],
            [
                SpecRule::NAME => 'expression',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-id-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bind/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4EMAIL,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-bind',
        ],
    ];
}
