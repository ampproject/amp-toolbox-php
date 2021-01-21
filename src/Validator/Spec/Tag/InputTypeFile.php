<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class InputTypeFile
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::INPUT,\nSpecRule::SPEC_NAME => 'INPUT [type=file]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::NO_VERIFY,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'file',\n                    ],\n    ],\n    [\n        SpecRule::NAME => '[TYPE]',\n        SpecRule::DISABLED_BY => [\n                        'amp4email',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'input-common-attr',\n                'name-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',\nSpecRule::MANDATORY_ANCESTOR => 'FORM [method=POST]',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\n];";
}
