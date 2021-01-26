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

final class AmpSkimlinks extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::SKIMLINKS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CUSTOM_REDIRECT_DOMAIN,
            ],
            [
                SpecRule::NAME => Attribute::CUSTOM_TRACKING_ID,
                SpecRule::VALUE_REGEX_CASEI => '^.{0,50}$',
            ],
            [
                SpecRule::NAME => Attribute::EXCLUDED_DOMAINS,
            ],
            [
                SpecRule::NAME => Attribute::LINK_SELECTOR,
            ],
            [
                SpecRule::NAME => Attribute::PUBLISHER_CODE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX_CASEI => '^[0-9]+X[0-9]+$',
            ],
            [
                SpecRule::NAME => Attribute::TRACKING,
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
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
            Extension::SKIMLINKS,
        ],
    ];
}
