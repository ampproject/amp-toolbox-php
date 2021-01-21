<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpOnetapGoogle
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::ONETAP_GOOGLE,\nSpecRule::UNIQUE => true,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-onetap-google',\n            ],\n];";
}
