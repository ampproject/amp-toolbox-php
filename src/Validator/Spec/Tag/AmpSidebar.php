<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpSidebar
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::SIDEBAR,\nSpecRule::SPEC_NAME => 'amp-sidebar',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::SIDE,\n        SpecRule::VALUE => [\n                        'left',\n                        'right',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-sidebar/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-STORY',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-sidebar',\n            ],\nSpecRule::MARK_DESCENDANTS => [\n                'marker' => [\n                    'AUTOSCROLL',\n                ],\n            ],\n];";
}
