<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpDatePickerTypeSingleModeStatic
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::DATE_PICKER,\nSpecRule::SPEC_NAME => 'amp-date-picker[type=single][mode=static]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::MODE,\n        SpecRule::VALUE_CASEI => [\n                        'static',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::VALUE_CASEI => [\n                        'single',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'amp-date-picker-common-attributes',\n                'amp-date-picker-single-type-attributes',\n                'amp-date-picker-static-mode-attributes',\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-date-picker',\n            ],\n];";
}
