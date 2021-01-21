<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class Input
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::INPUT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::NO_VERIFY,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\\s)(file|image|password|)(\\s|\$)',\n    ],\n    [\n        SpecRule::NAME => '[TYPE]',\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'input-common-attr',\n                'name-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\n];";
}
