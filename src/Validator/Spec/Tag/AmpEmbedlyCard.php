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
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpEmbedlyCard extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'AMP-EMBEDLY-CARD';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Extension::EMBEDLY_CARD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_URL,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-embedly-card/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::EMBEDLY_CARD,
        ],
    ];
}
