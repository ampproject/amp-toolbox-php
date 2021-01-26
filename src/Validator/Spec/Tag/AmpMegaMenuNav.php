<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpMegaMenuNav extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-MEGA-MENU > NAV',
        SpecRule::CHILD_TAGS => [
            'mandatoryNumChildTags' => 1,
            'childTagNameOneof' => [
                'OL',
                'UL',
            ],
        ],
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-MEGA-MENU NAV > UL/OL',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SIBLINGS_DISALLOWED => true,
        SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu > nav',
    ];
}
