<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpNestedMenu
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::NESTED_MENU,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::SIDE,\n        SpecRule::VALUE => [\n                        'left',\n                        'right',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-nested-menu/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                ],\n            ],\nSpecRule::MANDATORY_ANCESTOR => Extension::SIDEBAR,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-sidebar',\n            ],\nSpecRule::DESCENDANT_TAG_LIST => 'amp-nested-menu-allowed-descendants',\n];";
}
