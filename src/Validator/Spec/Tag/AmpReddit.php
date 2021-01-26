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

final class AmpReddit extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::REDDIT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-embedlive',
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'data-embedparent',
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'data-embedtype',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_CASEI => [
                    'comment',
                    'post',
                ],
            ],
            [
                SpecRule::NAME => 'data-src',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::REDDIT,
        ],
    ];
}
