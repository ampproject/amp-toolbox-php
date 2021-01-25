<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpEmbedlyKey extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::EMBEDLY_KEY,
        SpecRule::UNIQUE => true,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'value',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-embedly-card',
        ],
    ];
}
