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

final class AmpApesterMedia extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::APESTER_MEDIA,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_APESTER_CHANNEL_TOKEN,
                SpecRule::MANDATORY_ONEOF => '[\'data-apester-media-id\', \'data-apester-channel-token\']',
                SpecRule::VALUE_REGEX => '[0-9a-zA-Z]+',
            ],
            [
                SpecRule::NAME => Attribute::DATA_APESTER_MEDIA_ID,
                SpecRule::MANDATORY_ONEOF => '[\'data-apester-media-id\', \'data-apester-channel-token\']',
                SpecRule::VALUE_REGEX => '[0-9a-zA-Z]+',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-apester-media/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::APESTER_MEDIA,
        ],
    ];
}
