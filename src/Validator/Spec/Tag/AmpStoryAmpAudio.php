<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryAmpAudio
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::AUDIO,\nSpecRule::SPEC_NAME => 'amp-story >> amp-audio',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AUTOPLAY,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'amp-audio-common',\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-audio',\n            ],\n];";
}
