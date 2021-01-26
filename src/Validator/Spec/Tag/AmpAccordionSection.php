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

final class AmpAccordionSection extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SECTION,
        SpecRule::SPEC_NAME => 'amp-accordion > section',
        SpecRule::MANDATORY_PARENT => Extension::ACCORDION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ACCESS_HIDE,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => Attribute::EXPANDED,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => '[data-expand]',
            ],
        ],
        SpecRule::CHILD_TAGS => [
            SpecRule::MANDATORY_NUM_CHILD_TAGS => 2,
            SpecRule::FIRST_CHILD_TAG_NAME_ONEOF => [
                'H1',
                'H2',
                'H3',
                'H4',
                'H5',
                'H6',
                'HEADER',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'amp-accordion > section',
    ];
}
