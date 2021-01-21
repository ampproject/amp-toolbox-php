<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class DivAmpNestedMenu
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::DIV,\nSpecRule::SPEC_NAME => 'div amp-nested-menu',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AMP_NESTED_SUBMENU,\n        SpecRule::MANDATORY_ONEOF => '[\\'amp-nested-submenu\\', \\'amp-nested-submenu-close\\', \\'amp-nested-submenu-open\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::AMP_NESTED_SUBMENU_CLOSE,\n        SpecRule::MANDATORY_ONEOF => '[\\'amp-nested-submenu\\', \\'amp-nested-submenu-close\\', \\'amp-nested-submenu-open\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::AMP_NESTED_SUBMENU_OPEN,\n        SpecRule::MANDATORY_ONEOF => '[\\'amp-nested-submenu\\', \\'amp-nested-submenu-close\\', \\'amp-nested-submenu-open\\']',\n    ],\n],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-ACCORDION',\n            ],\nSpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\n];";
}
