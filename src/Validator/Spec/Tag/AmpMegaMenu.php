<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpMegaMenu extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::MEGA_MENU,
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-mega-menu/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FIXED_HEIGHT,
            ],
        ],
        SpecRule::CHILD_TAGS => [
            SpecRule::MANDATORY_NUM_CHILD_TAGS => 1,
            SpecRule::CHILD_TAG_NAME_ONEOF => [
                'NAV',
                'AMP-LIST',
            ],
        ],
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST',
            ],
            [
                'tagSpecName' => 'AMP-MEGA-MENU > NAV',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::MEGA_MENU,
        ],
        SpecRule::DESCENDANT_TAG_LIST => 'amp-mega-menu-allowed-descendants',
    ];
}
