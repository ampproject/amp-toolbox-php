<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpImgImgTransformed extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::IMG,
        SpecRule::SPEC_NAME => 'amp-img > img (transformed)',
        SpecRule::MANDATORY_PARENT => 'amp-img (transformed)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'alt',
            ],
            [
                SpecRule::NAME => 'attribution',
            ],
            [
                SpecRule::NAME => 'object-fit',
            ],
            [
                SpecRule::NAME => 'object-position',
            ],
            [
                SpecRule::NAME => 'referrerpolicy',
            ],
            [
                SpecRule::NAME => 'sizes',
            ],
            [
                SpecRule::NAME => 'title',
            ],
            [
                SpecRule::NAME => 'class',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => 'i-amphtml-fill-content\s+i-amphtml-replaced-content|i-amphtml-replaced-content\s+i-amphtml-fill-content',
            ],
            [
                SpecRule::NAME => 'decoding',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'async',
                ],
            ],
            [
                SpecRule::NAME => 'loading',
                SpecRule::VALUE => [
                    'lazy',
                    'eager',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-src-or-srcset',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::ENABLED_BY => [
            'transformed',
        ],
    ];
}
