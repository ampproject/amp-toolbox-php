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

final class AmpStoryBookendExtensionJsonScript extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::SPEC_NAME => 'amp-story-bookend extension .json script',
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Extension::STORY_BOOKEND,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'application/json',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'nonce-attr',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::STORY,
        ],
        SpecRule::SIBLINGS_DISALLOWED => true,
        SpecRule::MANDATORY_LAST_CHILD => true,
    ];
}
