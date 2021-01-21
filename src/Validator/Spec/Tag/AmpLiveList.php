<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpLiveList
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::LIVE_LIST,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_MAX_ITEMS_PER_PAGE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '\\d+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_POLL_INTERVAL,\n        SpecRule::VALUE_REGEX => '\\d{5,}',\n    ],\n    [\n        SpecRule::NAME => Attribute::DISABLED,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SORT,\n        SpecRule::VALUE => [\n                        'ascending',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'mandatory-id-attr',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::CONTAINER,\n                    Layout::FIXED_HEIGHT,\n                ],\n            ],\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-LIVE-LIST [update]',\n                    'mandatory' => true,\n                    'unique' => true,\n                ],\n                [\n                    'tagSpecName' => 'AMP-LIVE-LIST [items]',\n                    'mandatory' => true,\n                    'unique' => true,\n                ],\n                [\n                    'tagSpecName' => 'AMP-LIVE-LIST [pagination]',\n                    'unique' => true,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-live-list',\n            ],\n];";
}
