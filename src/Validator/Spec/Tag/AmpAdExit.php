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

final class AmpAdExit extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::AD_EXIT,
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'mandatory-id-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad-exit/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
                Layout::CONTAINER,
            ],
        ],
        SpecRule::CHILD_TAGS => [
            SpecRule::MANDATORY_NUM_CHILD_TAGS => 1,
            SpecRule::CHILD_TAG_NAME_ONEOF => [
                'SCRIPT',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4ADS,
        ],
        SpecRule::REQUIRES => [
            'amp-ad-exit configuration JSON',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::AD_EXIT,
        ],
    ];
}
