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

final class ScriptAmpMraid extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'no-fallback',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'common-extension-attrs',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4ADS,
        ],
        SpecRule::EXTENSION_SPEC => [
            SpecRule::NAME => 'amp-mraid',
            SpecRule::VERSION => [
                '0.1',
                'latest',
            ],
            SpecRule::REQUIRES_USAGE => 'NONE',
            SpecRule::EXTENSION_TYPE => 'HOST_SERVICE',
        ],
    ];
}
