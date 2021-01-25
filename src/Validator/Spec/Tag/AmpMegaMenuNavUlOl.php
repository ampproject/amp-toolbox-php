<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpMegaMenuNavUlOl extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-MEGA-MENU NAV > UL/OL',
        SpecRule::MANDATORY_PARENT => Element::NAV,
        SpecRule::CHILD_TAGS => [
            'childTagNameOneof' => [
                'LI',
            ],
            'mandatoryMinNumChildTags' => 1,
        ],
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-MEGA-MENU NAV > UL/OL > LI',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu nav > ul/ol',
    ];
}
