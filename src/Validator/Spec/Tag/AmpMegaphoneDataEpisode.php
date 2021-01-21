<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpMegaphoneDataEpisode
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::MEGAPHONE,\nSpecRule::SPEC_NAME => 'amp-megaphone [data-episode]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_EPISODE,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n        SpecRule::VALUE_REGEX => '[A-Za-z0-9]+',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_START,\n        SpecRule::VALUE_REGEX => '\\d+(\\.\\d+)?',\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_TILE,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'amp-megaphone-common',\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-megaphone',\n            ],\n];";
}
