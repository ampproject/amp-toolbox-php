<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpSkimlinks extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::SKIMLINKS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'custom-redirect-domain',
            ],
            [
                SpecRule::NAME => 'custom-tracking-id',
                SpecRule::VALUE_REGEX_CASEI => '^.{0,50}$',
            ],
            [
                SpecRule::NAME => 'excluded-domains',
            ],
            [
                SpecRule::NAME => 'link-selector',
            ],
            [
                SpecRule::NAME => 'publisher-code',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX_CASEI => '^[0-9]+X[0-9]+$',
            ],
            [
                SpecRule::NAME => 'tracking',
                SpecRule::VALUE => [
                    'false',
                    'true',
                ],
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
        SpecRule::REQUIRES_EXTENSION => [
            'amp-skimlinks',
        ],
    ];
}
