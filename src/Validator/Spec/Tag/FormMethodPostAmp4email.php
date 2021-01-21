<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class FormMethodPostAmp4email
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::FORM,\nSpecRule::SPEC_NAME => 'FORM [method=POST] (AMP4EMAIL)',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ACCEPT,\n    ],\n    [\n        SpecRule::NAME => Attribute::ACCEPT_CHARSET,\n    ],\n    [\n        SpecRule::NAME => Attribute::ACTION_XHR,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::AUTOCOMPLETE,\n    ],\n    [\n        SpecRule::NAME => Attribute::CUSTOM_VALIDATION_REPORTING,\n        SpecRule::VALUE => [\n                        'as-you-go',\n                        'interact-and-submit',\n                        'show-all-on-submit',\n                        'show-first-on-submit',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ENCTYPE,\n    ],\n    [\n        SpecRule::NAME => Attribute::METHOD,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'post',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::NOVALIDATE,\n    ],\n    [\n        SpecRule::NAME => Attribute::XSSI_PREFIX,\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4EMAIL,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-form',\n            ],\n];";
}
