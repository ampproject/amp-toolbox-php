<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

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
                SpecRule::NAME => 'access-hide',
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => 'expanded',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => '[data-expand]',
            ],
        ],
        SpecRule::CHILD_TAGS => [
            'mandatoryNumChildTags' => 2,
            'firstChildTagNameOneof' => [
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
