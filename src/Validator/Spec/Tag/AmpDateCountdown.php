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

final class AmpDateCountdown extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::DATE_COUNTDOWN,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::BIGGEST_UNIT,
                SpecRule::VALUE_CASEI => [
                    'days',
                    'hours',
                    'minutes',
                    'seconds',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_COUNT_UP,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::END_DATE,
                SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d(:[0-5]\d(\.\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',
            ],
            [
                SpecRule::NAME => Attribute::LOCALE,
                SpecRule::VALUE_CASEI => [
                    'de',
                    'en',
                    'es',
                    'fr',
                    'id',
                    'it',
                    'ja',
                    'ko',
                    'nl',
                    'pt',
                    'ru',
                    'th',
                    'tr',
                    'vi',
                    'zh-cn',
                    'zh-tw',
                ],
            ],
            [
                SpecRule::NAME => Attribute::OFFSET_SECONDS,
                SpecRule::VALUE_REGEX => '-?\d+',
            ],
            [
                SpecRule::NAME => Attribute::TEMPLATE,
                SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
            ],
            [
                SpecRule::NAME => Attribute::TIMELEFT_MS,
                SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => Attribute::TIMESTAMP_MS,
                SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d{13}',
            ],
            [
                SpecRule::NAME => Attribute::TIMESTAMP_SECONDS,
                SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d{10}',
            ],
            [
                SpecRule::NAME => Attribute::WHEN_ENDED,
                SpecRule::VALUE_CASEI => [
                    'continue',
                    'stop',
                ],
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
            Extension::DATE_COUNTDOWN,
        ],
    ];
}
