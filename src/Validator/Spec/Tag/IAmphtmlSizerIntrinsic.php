<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Internal;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class IAmphtmlSizerIntrinsic extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Internal::SIZER,
        SpecRule::SPEC_NAME => 'I-AMPHTML-SIZER-INTRINSIC',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CLASS_,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'i-amphtml-sizer',
                ],
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::EXPLICIT_ATTRS_ONLY => true,
        SpecRule::ENABLED_BY => [
            Attribute::TRANSFORMED,
        ],
    ];
}
