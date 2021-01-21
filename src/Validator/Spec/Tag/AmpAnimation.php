<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAnimation
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::ANIMATION,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TRIGGER,\n        SpecRule::VALUE => [\n                        'visibility',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 1,\n                'childTagNameOneof' => [\n                    'SCRIPT',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::REQUIRES => [\n                'amp-animation extension .json script',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-animation',\n            ],\n];";
}
