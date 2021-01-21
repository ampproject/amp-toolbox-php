<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpTimeago
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::TIMEAGO,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CUTOFF,\n        SpecRule::VALUE_REGEX => '\\d+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATETIME,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '\\d{4}-[01]\\d-[0-3]\\dT[0-2]\\d:[0-5]\\d(:[0-5]\\d(\\.\\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',\n    ],\n    [\n        SpecRule::NAME => Attribute::LOCALE,\n    ],\n    [\n        SpecRule::NAME => '[DATETIME]',\n    ],\n    [\n        SpecRule::NAME => '[TITLE]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-timeago/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-timeago',\n            ],\n];";
}
