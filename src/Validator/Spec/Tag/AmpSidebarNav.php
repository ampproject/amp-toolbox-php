<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpSidebarNav
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::NAV,\nSpecRule::SPEC_NAME => 'amp-sidebar > nav',\nSpecRule::MANDATORY_PARENT => Extension::SIDEBAR,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TOOLBAR,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::TOOLBAR_TARGET,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 1,\n                'childTagNameOneof' => [\n                    'OL',\n                    'UL',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4EMAIL,\n            ],\n];";
}
