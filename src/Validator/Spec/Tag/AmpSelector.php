<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpSelector
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::SELECTOR,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DISABLED,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::FORM,\n    ],\n    [\n        SpecRule::NAME => Attribute::KEYBOARD_SELECT_MODE,\n        SpecRule::VALUE_CASEI => [\n                        'focus',\n                        'none',\n                        'select',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::MULTIPLE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => '[DISABLED]',\n    ],\n    [\n        SpecRule::NAME => '[SELECTED]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n                'name-attr',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                    Layout::CONTAINER,\n                ],\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-SELECTOR',\n            ],\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-SELECTOR option',\n                ],\n                [\n                    'tagSpecName' => 'AMP-SELECTOR child',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-selector',\n            ],\n];";
}
