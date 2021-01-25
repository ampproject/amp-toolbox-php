<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpConsentType extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::CONSENT,
        SpecRule::SPEC_NAME => 'amp-consent [type]',
        SpecRule::UNIQUE => true,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'type',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'amp-consent [type]',
        ],
        SpecRule::REQUIRES => [
            'meta name=amp-consent-blocking',
            'amp-consent extension .json script',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-consent',
        ],
    ];
}
