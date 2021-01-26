<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpSidebarNav extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::NAV,
        SpecRule::SPEC_NAME => 'amp-sidebar > nav',
        SpecRule::MANDATORY_PARENT => Extension::SIDEBAR,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'toolbar',
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
            [
                SpecRule::NAME => 'toolbar-target',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::CHILD_TAGS => [
            SpecRule::MANDATORY_NUM_CHILD_TAGS => 1,
            SpecRule::CHILD_TAG_NAME_ONEOF => [
                'OL',
                'UL',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4EMAIL,
        ],
    ];
}
