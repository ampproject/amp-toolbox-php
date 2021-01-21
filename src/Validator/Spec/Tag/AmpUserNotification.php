<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpUserNotification
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::USER_NOTIFICATION,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_DISMISS_HREF,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                        SpecRule::ALLOW_EMPTY => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SHOW_IF_HREF,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                        SpecRule::ALLOW_EMPTY => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ENCTYPE,\n        SpecRule::VALUE => [\n                        'application/x-www-form-urlencoded',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-user-notification',\n            ],\n];";
}
