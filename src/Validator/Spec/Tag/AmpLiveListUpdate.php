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

final class AmpLiveListUpdate extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-LIVE-LIST [update]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::UPDATE,
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-live-list/#update',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'amp-live-list [update]',
    ];
}
