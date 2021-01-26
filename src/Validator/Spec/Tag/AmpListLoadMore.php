<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpListLoadMore extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::LIST_LOAD_MORE,
        SpecRule::MANDATORY_PARENT => Extension::LIST_,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'load-more-button',
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
            ],
            [
                SpecRule::NAME => 'load-more-failed',
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
            ],
            [
                SpecRule::NAME => 'load-more-loading',
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
            ],
            [
                SpecRule::NAME => 'load-more-end',
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-list',
        ],
    ];
}
