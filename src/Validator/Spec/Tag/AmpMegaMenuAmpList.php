<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpMegaMenuAmpList
{
    const SPEC = "[\nSpecRule::TAG_NAME => '\$REFERENCE_POINT',\nSpecRule::SPEC_NAME => 'AMP-MEGA-MENU > AMP-LIST',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY_ANYOF => '[\\'src\\',\\'[src]\\']',\n    ],\n    [\n        SpecRule::NAME => '[SRC]',\n        SpecRule::MANDATORY_ANYOF => '[\\'src\\',\\'[src]\\']',\n    ],\n],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 1,\n                'childTagNameOneof' => [\n                    'TEMPLATE',\n                ],\n            ],\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST > TEMPLATE',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu > amp-list',\n];";
}
