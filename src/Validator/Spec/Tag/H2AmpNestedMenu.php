<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class H2AmpNestedMenu extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::H2,
        SpecRule::SPEC_NAME => 'h2 amp-nested-menu',
        SpecRule::ATTR_LISTS => [
            'amp-nested-menu-actions',
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
