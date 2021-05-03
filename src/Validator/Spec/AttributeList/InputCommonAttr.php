<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class InputCommonAttr extends AttributeList
{
    /** @var string */
    const ID = 'input-common-attr';

    /** @var array<array> */
    const ATTRIBUTES = [
        Attribute::ACCEPT => [],
        Attribute::ACCESSKEY => [],
        Attribute::AUTOCOMPLETE => [],
        Attribute::AUTOFOCUS => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        Attribute::CHECKED => [],
        Attribute::DISABLED => [],
        Attribute::HEIGHT => [],
        Attribute::INPUTMODE => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        Attribute::LIST_ => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        Attribute::ENTERKEYHINT => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        Attribute::MAX => [],
        Attribute::MAXLENGTH => [],
        Attribute::MIN => [],
        Attribute::MINLENGTH => [],
        Attribute::MULTIPLE => [],
        Attribute::PATTERN => [],
        Attribute::PLACEHOLDER => [],
        Attribute::READONLY => [],
        Attribute::REQUIRED => [],
        Attribute::SELECTIONDIRECTION => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        Attribute::SIZE => [],
        Attribute::SPELLCHECK => [],
        Attribute::STEP => [],
        Attribute::TABINDEX => [],
        Attribute::VALUE => [],
        Attribute::WIDTH => [],
        '[ACCEPT]' => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        '[ACCESSKEY]' => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        '[AUTOCOMPLETE]' => [],
        '[CHECKED]' => [],
        '[DISABLED]' => [],
        '[HEIGHT]' => [],
        '[INPUTMODE]' => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        '[MAX]' => [],
        '[MAXLENGTH]' => [],
        '[MIN]' => [],
        '[MINLENGTH]' => [],
        '[MULTIPLE]' => [],
        '[PATTERN]' => [],
        '[PLACEHOLDER]' => [],
        '[READONLY]' => [],
        '[REQUIRED]' => [],
        '[SELECTIONDIRECTION]' => [
            SpecRule::DISABLED_BY => [
                Attribute::AMP4EMAIL,
            ],
        ],
        '[SIZE]' => [],
        '[SPELLCHECK]' => [],
        '[STEP]' => [],
        '[VALUE]' => [],
        '[WIDTH]' => [],
    ];
}
