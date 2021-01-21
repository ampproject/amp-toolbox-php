<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpSkimlinks
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::SKIMLINKS,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CUSTOM_REDIRECT_DOMAIN,\n    ],\n    [\n        SpecRule::NAME => Attribute::CUSTOM_TRACKING_ID,\n        SpecRule::VALUE_REGEX_CASEI => '^.{0,50}\$',\n    ],\n    [\n        SpecRule::NAME => Attribute::EXCLUDED_DOMAINS,\n    ],\n    [\n        SpecRule::NAME => Attribute::LINK_SELECTOR,\n    ],\n    [\n        SpecRule::NAME => Attribute::PUBLISHER_CODE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX_CASEI => '^[0-9]+X[0-9]+\$',\n    ],\n    [\n        SpecRule::NAME => Attribute::TRACKING,\n        SpecRule::VALUE => [\n                        'false',\n                        'true',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-skimlinks',\n            ],\n];";
}
