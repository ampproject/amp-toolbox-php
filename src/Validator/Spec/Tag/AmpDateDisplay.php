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

final class AmpDateDisplay extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::DATE_DISPLAY,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATETIME,
                SpecRule::MANDATORY_ONEOF => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => 'now|(\d{4}-[01]\d-[0-3]\d(T[0-2]\d:[0-5]\d(:[0-6]\d(\.\d\d?\d?)?)?(Z|[+-][0-1]\d:[0-5]\d)?)?)',
            ],
            [
                SpecRule::NAME => Attribute::DISPLAY_IN,
                SpecRule::VALUE_CASEI => [
                    'utc',
                ],
            ],
            [
                SpecRule::NAME => Attribute::OFFSET_SECONDS,
                SpecRule::VALUE_REGEX => '-?\d+',
            ],
            [
                SpecRule::NAME => Attribute::LOCALE,
            ],
            [
                SpecRule::NAME => Attribute::TEMPLATE,
                SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
            ],
            [
                SpecRule::NAME => Attribute::TIMESTAMP_MS,
                SpecRule::MANDATORY_ONEOF => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => Attribute::TIMESTAMP_SECONDS,
                SpecRule::MANDATORY_ONEOF => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d+',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
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
            Extension::DATE_DISPLAY,
        ],
    ];
}
