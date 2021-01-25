<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStickyAd extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STICKY_AD,
        SpecRule::UNIQUE => true,
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-APP-BANNER',
        ],
        SpecRule::CHILD_TAGS => [
            'mandatoryNumChildTags' => 1,
            'firstChildTagNameOneof' => [
                'AMP-AD',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-sticky-ad',
        ],
    ];
}
