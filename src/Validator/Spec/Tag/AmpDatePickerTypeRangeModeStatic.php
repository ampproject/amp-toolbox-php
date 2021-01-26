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

final class AmpDatePickerTypeRangeModeStatic extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::DATE_PICKER,
        SpecRule::SPEC_NAME => 'amp-date-picker[type=range][mode=static]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'mode',
                SpecRule::VALUE_CASEI => [
                    'static',
                ],
            ],
            [
                SpecRule::NAME => 'type',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_CASEI => [
                    'range',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'amp-date-picker-common-attributes',
            'amp-date-picker-range-type-attributes',
            'amp-date-picker-static-mode-attributes',
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::DATE_PICKER,
        ],
    ];
}
