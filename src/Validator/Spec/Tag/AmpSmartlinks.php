<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpSmartlinks
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::SMARTLINKS,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::EXCLUSIVE_LINKS,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::LINK_ATTRIBUTE,\n    ],\n    [\n        SpecRule::NAME => Attribute::LINK_SELECTOR,\n    ],\n    [\n        SpecRule::NAME => Attribute::LINKMATE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::NRTV_ACCOUNT_NAME,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-smartlinks',\n            ],\n];";
}
