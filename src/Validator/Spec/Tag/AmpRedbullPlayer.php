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

final class AmpRedbullPlayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::REDBULL_PLAYER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-param-videoid',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::RESPONSIVE,
                Layout::FILL,
                Layout::FLEX_ITEM,
                Layout::FLUID,
                Layout::INTRINSIC,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::REDBULL_PLAYER,
        ],
    ];
}
