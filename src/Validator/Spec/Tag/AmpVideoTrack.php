<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpVideoTrack
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::TRACK,\nSpecRule::SPEC_NAME => 'amp-video > track',\nSpecRule::MANDATORY_PARENT => Extension::VIDEO,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => '[LABEL]',\n    ],\n    [\n        SpecRule::NAME => '[SRC]',\n    ],\n    [\n        SpecRule::NAME => '[SRCLANG]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'track-attrs-no-subtitles',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
