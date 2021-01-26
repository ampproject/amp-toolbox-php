<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Base extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::BASE,
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'href',
                SpecRule::VALUE => [
                    '/',
                ],
            ],
            [
                SpecRule::NAME => 'target',
                SpecRule::VALUE_CASEI => [
                    '_blank',
                    '_self',
                    '_top',
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
