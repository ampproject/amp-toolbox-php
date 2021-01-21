<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpMegaMenuNavUlOlLi
{
    const SPEC = "[\nSpecRule::TAG_NAME => '\$REFERENCE_POINT',\nSpecRule::SPEC_NAME => 'AMP-MEGA-MENU NAV > UL/OL > LI',\nSpecRule::CHILD_TAGS => [\n                'childTagNameOneof' => [\n                    'A',\n                    'BUTTON',\n                    'DIV',\n                    'H1',\n                    'H2',\n                    'H3',\n                    'H4',\n                    'H5',\n                    'H6',\n                    'SPAN',\n                ],\n                'mandatoryMinNumChildTags' => 1,\n            ],\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-MEGA-MENU item-content',\n                    'unique' => true,\n                ],\n                [\n                    'tagSpecName' => 'AMP-MEGA-MENU item-heading',\n                    'mandatory' => true,\n                    'unique' => true,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu nav > ul/ol > li',\n];";
}
