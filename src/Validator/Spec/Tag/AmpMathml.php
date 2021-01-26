<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpMathml extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::MATHML,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_FORMULA,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::INLINE,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::CONTAINER,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::MATHML,
        ],
    ];
}
