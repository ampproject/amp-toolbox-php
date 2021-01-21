<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpDateDisplay
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::DATE_DISPLAY,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATETIME,\n        SpecRule::MANDATORY_ONEOF => '[\\'datetime\\', \\'timestamp-ms\\', \\'timestamp-seconds\\']',\n        SpecRule::VALUE_REGEX => 'now|(\\d{4}-[01]\\d-[0-3]\\d(T[0-2]\\d:[0-5]\\d(:[0-6]\\d(\\.\\d\\d?\\d?)?)?(Z|[+-][0-1]\\d:[0-5]\\d)?)?)',\n    ],\n    [\n        SpecRule::NAME => Attribute::DISPLAY_IN,\n        SpecRule::VALUE_CASEI => [\n                        'utc',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::OFFSET_SECONDS,\n        SpecRule::VALUE_REGEX => '-?\\d+',\n    ],\n    [\n        SpecRule::NAME => Attribute::LOCALE,\n    ],\n    [\n        SpecRule::NAME => Attribute::TEMPLATE,\n        SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',\n    ],\n    [\n        SpecRule::NAME => Attribute::TIMESTAMP_MS,\n        SpecRule::MANDATORY_ONEOF => '[\\'datetime\\', \\'timestamp-ms\\', \\'timestamp-seconds\\']',\n        SpecRule::VALUE_REGEX => '\\d+',\n    ],\n    [\n        SpecRule::NAME => Attribute::TIMESTAMP_SECONDS,\n        SpecRule::MANDATORY_ONEOF => '[\\'datetime\\', \\'timestamp-ms\\', \\'timestamp-seconds\\']',\n        SpecRule::VALUE_REGEX => '\\d+',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-date-display',\n            ],\n];";
}
