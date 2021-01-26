<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
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
                SpecRule::NAME => Attribute::LOAD_MORE_BUTTON,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
            ],
            [
                SpecRule::NAME => Attribute::LOAD_MORE_FAILED,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
            ],
            [
                SpecRule::NAME => Attribute::LOAD_MORE_LOADING,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
            ],
            [
                SpecRule::NAME => Attribute::LOAD_MORE_END,
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
            Extension::LIST_,
        ],
    ];
}
