<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpPlaybuzz extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::PLAYBUZZ,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-comments',
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'data-item',
                SpecRule::MANDATORY_ONEOF => '[\'data-item\', \'src\']',
            ],
            [
                SpecRule::NAME => 'data-item-info',
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'data-share-buttons',
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => 'src',
                SpecRule::MANDATORY_ONEOF => '[\'data-item\', \'src\']',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::RESPONSIVE,
                Layout::FIXED_HEIGHT,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-playbuzz',
        ],
    ];
}
