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

final class AmpImageLightbox extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::IMAGE_LIGHTBOX,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'controls',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4EMAIL,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::IMAGE_LIGHTBOX,
        ],
    ];
}
