<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Pattern extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::PATTERN,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'externalresourcesrequired',
            ],
            [
                SpecRule::NAME => 'height',
            ],
            [
                SpecRule::NAME => 'patterncontentunits',
            ],
            [
                SpecRule::NAME => 'patterntransform',
            ],
            [
                SpecRule::NAME => 'patternunits',
            ],
            [
                SpecRule::NAME => 'preserveaspectratio',
            ],
            [
                SpecRule::NAME => 'viewbox',
            ],
            [
                SpecRule::NAME => 'width',
            ],
            [
                SpecRule::NAME => 'x',
            ],
            [
                SpecRule::NAME => 'y',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'svg-conditional-processing-attributes',
            'svg-core-attributes',
            'svg-presentation-attributes',
            'svg-style-attr',
            'svg-xlink-attributes',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
