<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

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
                SpecRule::NAME => 'font-family',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'font-style',
            ],
            [
                SpecRule::NAME => 'font-variant',
            ],
            [
                SpecRule::NAME => 'font-weight',
            ],
            [
                SpecRule::NAME => 'on-error-add-class',
            ],
            [
                SpecRule::NAME => 'on-error-remove-class',
            ],
            [
                SpecRule::NAME => 'on-load-add-class',
            ],
            [
                SpecRule::NAME => 'on-load-remove-class',
            ],
            [
                SpecRule::NAME => 'timeout',
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-font',
        ],
    ];
}
