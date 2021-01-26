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

final class AmpFont extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::FONT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::FONT_FAMILY,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::FONT_STYLE,
            ],
            [
                SpecRule::NAME => Attribute::FONT_VARIANT,
            ],
            [
                SpecRule::NAME => Attribute::FONT_WEIGHT,
            ],
            [
                SpecRule::NAME => Attribute::ON_ERROR_ADD_CLASS,
            ],
            [
                SpecRule::NAME => Attribute::ON_ERROR_REMOVE_CLASS,
            ],
            [
                SpecRule::NAME => Attribute::ON_LOAD_ADD_CLASS,
            ],
            [
                SpecRule::NAME => Attribute::ON_LOAD_REMOVE_CLASS,
            ],
            [
                SpecRule::NAME => Attribute::TIMEOUT,
                SpecRule::VALUE_REGEX => '[0-9]+',
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
            Format::AMP4ADS,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::FONT,
        ],
    ];
}
