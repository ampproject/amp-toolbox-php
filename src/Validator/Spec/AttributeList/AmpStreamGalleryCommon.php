<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class AmpStreamGalleryCommon extends AttributeList
{
    /** @var string */
    const ID = 'amp-stream-gallery-common';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::CONTROLS => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(always|auto|never),\s*)*(always|auto|never)',
        ],
        Attribute::EXTRA_SPACE => [
            SpecRule::VALUE => [
                'between',
            ],
        ],
        Attribute::LOOP => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
        ],
        Attribute::MIN_VISIBLE_COUNT => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+(\.\d+)?),\s*)*(\d+(\.\d+)?)',
        ],
        Attribute::MAX_VISIBLE_COUNT => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+(\.\d+)?),\s*)*(\d+(\.\d+)?)',
        ],
        Attribute::MIN_ITEM_WIDTH => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
        ],
        Attribute::MAX_ITEM_WIDTH => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
        ],
        Attribute::OUTSET_ARROWS => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
        ],
        Attribute::PEEK => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(\d+(\.\d+)?),\s*)*(\d+(\.\d+)?)',
        ],
        Attribute::SLIDE_ALIGN => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(start|center),\s*)*(start|center)',
        ],
        Attribute::SNAP => [
            SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
        ],
        '[CONTROLS]' => [],
        '[EXTRA_SPACE]' => [],
        '[LOOP]' => [],
        '[MIN_VISIBLE_COUNT]' => [],
        '[MAX_VISIBLE_COUNT]' => [],
        '[MIN_ITEM_WIDTH]' => [],
        '[MAX_ITEM_WIDTH]' => [],
        '[OUTSET_ARROWS]' => [],
        '[PEEK]' => [],
        '[SLIDE_ALIGN]' => [],
        '[SNAP]' => [],
    ];
}
