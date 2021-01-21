<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AAmp4email
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::A,\nSpecRule::SPEC_NAME => 'A (AMP4EMAIL)',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::BORDER,\n    ],\n    [\n        SpecRule::NAME => Attribute::HREF,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|(.|\\s){{|}}(.|\\s)|^{{.*[^}][^}]\$|^[^{][^{].*}}\$|^}}|{{\$|{{#|{{/|{{\\^',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'http',\n                            'https',\n                            'mailto',\n                            'tel',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::HREFLANG,\n    ],\n    [\n        SpecRule::NAME => Attribute::MEDIA,\n    ],\n    [\n        SpecRule::NAME => Attribute::ROLE,\n        SpecRule::IMPLICIT => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::TABINDEX,\n        SpecRule::IMPLICIT => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::TARGET,\n        SpecRule::VALUE => [\n                        '_blank',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::VALUE_CASEI => [\n                        'text/html',\n                    ],\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4EMAIL,\n            ],\n];";
}
