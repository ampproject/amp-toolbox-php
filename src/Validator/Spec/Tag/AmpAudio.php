<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAudio
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::AUDIO,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::PRELOAD,\n        SpecRule::VALUE_CASEI => [\n                        'auto',\n                        'metadata',\n                        'none',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'amp-audio-common',\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::NODISPLAY,\n                ],\n                'definesDefaultWidth' => true,\n                'definesDefaultHeight' => true,\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-STORY',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-audio',\n            ],\n];";
}
