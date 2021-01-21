<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpWebPush
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::WEB_PUSH,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::HELPER_IFRAME_URL,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ID,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'amp-web-push',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::PERMISSION_DIALOG_URL,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SERVICE_WORKER_URL,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SERVICE_WORKER_SCOPE,\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-web-push/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-web-push',\n            ],\n];";
}
