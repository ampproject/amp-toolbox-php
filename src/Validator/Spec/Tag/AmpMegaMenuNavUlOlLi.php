<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpMegaMenuNavUlOlLi extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-MEGA-MENU NAV > UL/OL > LI',
        SpecRule::CHILD_TAGS => [
            'childTagNameOneof' => [
                'A',
                'BUTTON',
                'DIV',
                'H1',
                'H2',
                'H3',
                'H4',
                'H5',
                'H6',
                'SPAN',
            ],
            'mandatoryMinNumChildTags' => 1,
        ],
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-MEGA-MENU item-content',
                SpecRule::UNIQUE => true,
            ],
            [
                'tagSpecName' => 'AMP-MEGA-MENU item-heading',
                SpecRule::MANDATORY => true,
                SpecRule::UNIQUE => true,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu nav > ul/ol > li',
    ];
}
