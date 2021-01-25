<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpMegaMenuAmpList extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-MEGA-MENU > AMP-LIST',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'src',
                SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\']',
            ],
            [
                SpecRule::NAME => '[src]',
                SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\']',
            ],
        ],
        SpecRule::CHILD_TAGS => [
            'mandatoryNumChildTags' => 1,
            'childTagNameOneof' => [
                'TEMPLATE',
            ],
        ],
        SpecRule::REFERENCE_POINTS => [
            [
                'tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST > TEMPLATE',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu > amp-list',
    ];
}
