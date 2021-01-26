<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpListLoadMoreButtonLoadMoreClickable extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::BUTTON,
        SpecRule::SPEC_NAME => 'amp-list-load-more button[load-more-clickable]',
        SpecRule::MANDATORY_PARENT => Extension::LIST_LOAD_MORE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DISABLED,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::LOAD_MORE_CLICKABLE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
            [
                SpecRule::NAME => Attribute::ROLE,
                SpecRule::IMPLICIT => true,
            ],
            [
                SpecRule::NAME => Attribute::TABINDEX,
                SpecRule::IMPLICIT => true,
            ],
            [
                SpecRule::NAME => Attribute::TYPE,
            ],
            [
                SpecRule::NAME => Attribute::VALUE,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'name-attr',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::LIST_,
        ],
    ];
}
