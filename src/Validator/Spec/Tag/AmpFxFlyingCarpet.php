<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpFxFlyingCarpet extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::FX_FLYING_CARPET,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'height',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::FX_FLYING_CARPET,
        ],
    ];
}
