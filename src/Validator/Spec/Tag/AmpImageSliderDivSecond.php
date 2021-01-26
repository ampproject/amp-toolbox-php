<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpImageSliderDivSecond extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::DIV,
        SpecRule::SPEC_NAME => 'AMP-IMAGE-SLIDER > DIV [second]',
        SpecRule::MANDATORY_PARENT => Extension::IMAGE_SLIDER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'second',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-image-slider/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
