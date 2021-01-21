<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpMegaMenu
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::MEGA_MENU,\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-mega-menu/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FIXED_HEIGHT,\n                ],\n            ],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 1,\n                'childTagNameOneof' => [\n                    'NAV',\n                    'AMP-LIST',\n                ],\n            ],\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST',\n                ],\n                [\n                    'tagSpecName' => 'AMP-MEGA-MENU > NAV',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-mega-menu',\n            ],\nSpecRule::DESCENDANT_TAG_LIST => 'amp-mega-menu-allowed-descendants',\n];";
}
