<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpImaVideoTrackKindSubtitles
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::TRACK,\nSpecRule::SPEC_NAME => 'amp-ima-video > track[kind=subtitles]',\nSpecRule::MANDATORY_PARENT => Extension::IMA_VIDEO,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => '[LABEL]',\n    ],\n    [\n        SpecRule::NAME => '[SRC]',\n    ],\n    [\n        SpecRule::NAME => '[SRCLANG]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'track-attrs-subtitles',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ima-video/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\n];";
}
