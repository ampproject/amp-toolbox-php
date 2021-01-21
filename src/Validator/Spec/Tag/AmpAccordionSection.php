<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAccordionSection
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SECTION,\nSpecRule::SPEC_NAME => 'amp-accordion > section',\nSpecRule::MANDATORY_PARENT => Extension::ACCORDION,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ACCESS_HIDE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::EXPANDED,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => '[DATA_EXPAND]',\n    ],\n],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 2,\n                'firstChildTagNameOneof' => [\n                    'H1',\n                    'H2',\n                    'H3',\n                    'H4',\n                    'H5',\n                    'H6',\n                    'HEADER',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'amp-accordion > section',\n];";
}
