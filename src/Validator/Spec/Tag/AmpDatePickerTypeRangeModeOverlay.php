<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpDatePickerTypeRangeModeOverlay
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::DATE_PICKER,\nSpecRule::SPEC_NAME => 'amp-date-picker[type=range][mode=overlay]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::MODE,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'overlay',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_CASEI => [\n                        'range',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'amp-date-picker-common-attributes',\n                'amp-date-picker-overlay-mode-attributes',\n                'amp-date-picker-range-type-attributes',\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::CONTAINER,\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-date-picker',\n            ],\n];";
}
