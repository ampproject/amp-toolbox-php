<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpNextPageWithInlineConfig extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::NEXT_PAGE,
        SpecRule::SPEC_NAME => 'amp-next-page with inline config',
        SpecRule::UNIQUE => true,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DEEP_PARSING,
            ],
            [
                SpecRule::NAME => Attribute::MAX_PAGES,
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-next-page/',
        SpecRule::REFERENCE_POINTS => [
            [
                SpecRule::TAG_SPEC_NAME => 'AMP-NEXT-PAGE > [separator]',
                SpecRule::UNIQUE => true,
            ],
            [
                SpecRule::TAG_SPEC_NAME => 'AMP-NEXT-PAGE > [recommendation-box]',
                SpecRule::UNIQUE => true,
            ],
            [
                SpecRule::TAG_SPEC_NAME => 'AMP-NEXT-PAGE > [footer]',
                SpecRule::UNIQUE => true,
            ],
            [
                SpecRule::TAG_SPEC_NAME => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]',
                SpecRule::MANDATORY => true,
                SpecRule::UNIQUE => true,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::NEXT_PAGE,
        ],
    ];
}
