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

final class AmpPlaybuzz extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::PLAYBUZZ,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_COMMENTS,
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_ITEM,
                SpecRule::MANDATORY_ONEOF => '[\'data-item\', \'src\']',
            ],
            [
                SpecRule::NAME => Attribute::DATA_ITEM_INFO,
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_SHARE_BUTTONS,
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::MANDATORY_ONEOF => '[\'data-item\', \'src\']',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::RESPONSIVE,
                Layout::FIXED_HEIGHT,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::PLAYBUZZ,
        ],
    ];
}
