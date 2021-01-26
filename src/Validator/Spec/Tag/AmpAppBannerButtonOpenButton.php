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

final class AmpAppBannerButtonOpenButton extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::BUTTON,
        SpecRule::SPEC_NAME => 'amp-app-banner button[open-button]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::OPEN_BUTTON,
                SpecRule::VALUE => [
                    '',
                ],
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
        SpecRule::MANDATORY_ANCESTOR => Extension::APP_BANNER,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::SATISFIES => [
            'amp-app-banner button[open-button]',
        ],
    ];
}
