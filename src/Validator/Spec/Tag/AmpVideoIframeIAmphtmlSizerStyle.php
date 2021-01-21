<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpVideoIframeIAmphtmlSizerStyle
{
    const SPEC = "[\nSpecRule::TAG_NAME => '\$REFERENCE_POINT',\nSpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::STYLE,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '!\\s*important',\n        SpecRule::CSS_DECLARATION => [\n                        [\n                            'name' => 'display',\n                            'valueCasei' => [\n                                'block',\n                            ],\n                        ],\n                        [\n                            'name' => 'padding-top',\n                        ],\n                    ],\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::EXPLICIT_ATTRS_ONLY => true,\nSpecRule::ENABLED_BY => [\n                'transformed',\n            ],\n];";
}
