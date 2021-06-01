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

final class AmpBeopinion extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'AMP-BEOPINION';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Extension::BEOPINION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_ACCOUNT,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX_CASEI => '[0-9a-f]{24}',
            ],
            [
                SpecRule::NAME => Attribute::DATA_CONTENT,
                SpecRule::VALUE_REGEX_CASEI => '[0-9a-f]{24}',
            ],
            [
                SpecRule::NAME => Attribute::DATA_MY_CONTENT,
                SpecRule::VALUE => [
                    '0',
                    '1',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_NAME,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::BEOPINION,
        ],
    ];
}
