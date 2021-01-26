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

final class AmpMegaphoneDataPlaylist extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::MEGAPHONE,
        SpecRule::SPEC_NAME => 'amp-megaphone [data-playlist]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-playlist',
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                SpecRule::VALUE_REGEX => '[A-Za-z0-9]+',
            ],
            [
                SpecRule::NAME => 'data-episodes',
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'amp-megaphone-common',
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-megaphone',
        ],
    ];
}
