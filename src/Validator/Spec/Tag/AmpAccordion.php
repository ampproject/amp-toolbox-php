<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAccordion
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::ACCORDION,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ANIMATE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DISABLE_SESSION_STATES,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::EXPAND_SINGLE_SECTION,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-accordion/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::CONTAINER,\n                ],\n            ],\nSpecRule::CHILD_TAGS => [\n                'childTagNameOneof' => [\n                    'SECTION',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-accordion',\n            ],\n];";
}
