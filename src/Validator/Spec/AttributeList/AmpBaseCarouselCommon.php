<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmpBaseCarouselCommon extends AttributeList
{
    /** @var string */
    const ID = 'amp-base-carousel-common';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::ADVANCE_COUNT => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(-?\d+),\s*)*(-?\d+)',
        ],
        Attribute::AUTO_ADVANCE => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
        ],
        Attribute::AUTO_ADVANCE_COUNT => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(-?\d+),\s*)*(-?\d+)',
        ],
        Attribute::AUTO_ADVANCE_INTERVAL => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
        ],
        Attribute::AUTO_ADVANCE_LOOPS => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
        ],
        Attribute::CONTROLS => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(always|auto|never),\s*)*(always|auto|never)',
        ],
        Attribute::HORIZONTAL => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
        ],
        Attribute::LOOP => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
        ],
        Attribute::MIXED_LENGTH => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
        ],
        Attribute::ORIENTATION => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(horizontal|vertical),\s*)*(horizontal|vertical)',
        ],
        Attribute::SLIDE => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
        ],
        Attribute::SNAP => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
        ],
        Attribute::SNAP_ALIGN => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(start|center),\s*)*(start|center)',
        ],
        Attribute::SNAP_BY => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
        ],
        Attribute::VISIBLE_COUNT => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+(\.\d+)?),\s*)*(\d+(\.\d+)?)',
        ],
        '[ADVANCE_COUNT]' => [],
        '[AUTO_ADVANCE]' => [],
        '[AUTO_ADVANCE_COUNT]' => [],
        '[AUTO_ADVANCE_INTERVAL]' => [],
        '[AUTO_ADVANCE_LOOPS]' => [],
        '[HORIZONTAL]' => [],
        '[LOOP]' => [],
        '[MIXED_LENGTH]' => [],
        '[ORIENTATION]' => [],
        '[SLIDE]' => [],
        '[SNAP]' => [],
        '[SNAP_ALIGN]' => [],
        '[SNAP_BY]' => [],
        '[VISIBLE_COUNT]' => [],
    ];
}
