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

final class AmpDateCountdown extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::DATE_COUNTDOWN,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'biggest-unit',
                SpecRule::VALUE_CASEI => [
                    'days',
                    'hours',
                    'minutes',
                    'seconds',
                ],
            ],
            [
                SpecRule::NAME => 'data-count-up',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'end-date',
                SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d(:[0-5]\d(\.\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',
            ],
            [
                SpecRule::NAME => 'locale',
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
                SpecRule::NAME => 'offset-seconds',
                SpecRule::VALUE_REGEX => '-?\d+',
            ],
            [
                SpecRule::NAME => 'template',
                SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
            ],
            [
                SpecRule::NAME => 'timeleft-ms',
                SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => 'timestamp-ms',
                SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d{13}',
            ],
            [
                SpecRule::NAME => 'timestamp-seconds',
                SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                SpecRule::VALUE_REGEX => '\d{10}',
            ],
            [
                SpecRule::NAME => 'when-ended',
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
            'supportedLayouts' => [
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
            'amp-date-countdown',
        ],
    ];
}
