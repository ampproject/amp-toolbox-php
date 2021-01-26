<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class DivAmpNestedMenu extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::DIV,
        SpecRule::SPEC_NAME => 'div amp-nested-menu',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AMP_NESTED_SUBMENU,
                SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
            ],
            [
                SpecRule::NAME => Attribute::AMP_NESTED_SUBMENU_CLOSE,
                SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
            ],
            [
                SpecRule::NAME => Attribute::AMP_NESTED_SUBMENU_OPEN,
                SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
            ],
        ],
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-ACCORDION',
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
