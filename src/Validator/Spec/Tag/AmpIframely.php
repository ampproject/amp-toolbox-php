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
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpIframely extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'AMP-IFRAMELY';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Extension::IFRAMELY,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_ID,
                SpecRule::MANDATORY_ONEOF => '[\'data-id\', \'data-url\']',
            ],
            [
                SpecRule::NAME => Attribute::DATA_URL,
                SpecRule::MANDATORY_ONEOF => '[\'data-id\', \'data-url\']',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_KEY,
                    ],
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_KEY,
            ],
            [
                SpecRule::NAME => Attribute::DATA_IMG,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_BORDER,
                SpecRule::VALUE_REGEX => '(\d+)',
            ],
            [
                SpecRule::NAME => Attribute::DATA_DOMAIN,
                SpecRule::VALUE_REGEX => '^((?:[^\.\/]+\.)?iframe\.ly|if\-cdn\.com|iframely\.net|oembed\.vice\.com|iframe\.nbcnews\.com)$',
            ],
            [
                SpecRule::NAME => Attribute::RESIZABLE,
                SpecRule::VALUE => [
                    '',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-iframely',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::RESPONSIVE,
                Layout::INTRINSIC,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::IFRAMELY,
        ],
    ];
}
