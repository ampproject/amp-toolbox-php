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
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpAddthis extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::ADDTHIS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_PRODUCT_CODE,
                SpecRule::MANDATORY_ONEOF => '[\'data-product-code\', \'data-widget-id\']',
            ],
            [
                SpecRule::NAME => Attribute::DATA_SHARE_MEDIA,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_SHARE_URL,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_WIDGET_ID,
                SpecRule::MANDATORY_ONEOF => '[\'data-product-code\', \'data-widget-id\']',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_PUB_ID,
                    ],
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
            Extension::ADDTHIS,
        ],
    ];
}
