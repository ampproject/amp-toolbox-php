<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\Section\DescendantTagList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpNestedMenu extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::NESTED_MENU,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::SIDE,
                SpecRule::VALUE => [
                    'left',
                    'right',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-nested-menu/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::SIDEBAR,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::SIDEBAR,
        ],
        SpecRule::DESCENDANT_TAG_LIST => DescendantTagList::AMP_NESTED_MENU_ALLOWED_DESCENDANTS,
    ];
}
