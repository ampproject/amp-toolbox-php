<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpMegaphoneDataPlaylist
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::MEGAPHONE,\nSpecRule::SPEC_NAME => 'amp-megaphone [data-playlist]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_PLAYLIST,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n        SpecRule::VALUE_REGEX => '[A-Za-z0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_EPISODES,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'amp-megaphone-common',\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-megaphone',\n            ],\n];";
}
