<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

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
                SpecRule::NAME => 'disabled',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'load-more-clickable',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
            [
                SpecRule::NAME => 'role',
                SpecRule::IMPLICIT => true,
            ],
            [
                SpecRule::NAME => 'tabindex',
                SpecRule::IMPLICIT => true,
            ],
            [
                SpecRule::NAME => 'type',
            ],
            [
                SpecRule::NAME => 'value',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'name-attr',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-list',
        ],
    ];
}
