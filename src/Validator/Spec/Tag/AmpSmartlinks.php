<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpSmartlinks extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::SMARTLINKS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::EXCLUSIVE_LINKS,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::LINK_ATTRIBUTE,
            ],
            [
                SpecRule::NAME => Attribute::LINK_SELECTOR,
            ],
            [
                SpecRule::NAME => Attribute::LINKMATE,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::NRTV_ACCOUNT_NAME,
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::SMARTLINKS,
        ],
    ];
}
