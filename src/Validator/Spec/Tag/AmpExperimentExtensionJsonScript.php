<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpExperimentExtensionJsonScript extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::SPEC_NAME => 'amp-experiment extension .json script',
        SpecRule::MANDATORY_PARENT => Extension::EXPERIMENT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'application/json',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'nonce-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-experiment/',
        SpecRule::CDATA => [
            SpecRule::MAX_BYTES => 15000,
            SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/components/amp-experiment/#configuration',
            SpecRule::DISALLOWED_CDATA_REGEX => [
                [
                    'regex' => '<!--',
                    'errorMessage' => 'html comments',
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
