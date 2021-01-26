<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpVideoIframeIAmphtmlSizerStyle extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'style',
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '!\s*important',
                SpecRule::CSS_DECLARATION => [
                    [
                        SpecRule::NAME => 'display',
                        SpecRule::VALUE_CASEI => [
                            'block',
                        ],
                    ],
                    [
                        SpecRule::NAME => 'padding-top',
                    ],
                ],
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::EXPLICIT_ATTRS_ONLY => true,
        SpecRule::ENABLED_BY => [
            'transformed',
        ],
    ];
}
