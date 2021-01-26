<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpBaseCarouselLightboxLightboxExclude extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::LIGHTBOX_EXCLUDE,
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
