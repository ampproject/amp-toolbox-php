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

final class AmpDatePickerTypeRangeModeOverlay extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::DATE_PICKER,
        SpecRule::SPEC_NAME => 'amp-date-picker[type=range][mode=overlay]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::MODE,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'overlay',
                ],
            ],
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_CASEI => [
                    'range',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'amp-date-picker-common-attributes',
            'amp-date-picker-overlay-mode-attributes',
            'amp-date-picker-range-type-attributes',
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::CONTAINER,
                Layout::NODISPLAY,
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
