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
            'supportedLayouts' => [
                Layout::NODISPLAY,
                Layout::CONTAINER,
            ],
        ],
        SpecRule::CHILD_TAGS => [
            'mandatoryNumChildTags' => 1,
            'childTagNameOneof' => [
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
            'amp-ad-exit',
        ],
    ];
}
