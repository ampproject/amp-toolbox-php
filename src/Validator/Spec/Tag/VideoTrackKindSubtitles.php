<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class VideoTrackKindSubtitles
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::TRACK,\nSpecRule::SPEC_NAME => 'video > track[kind=subtitles]',\nSpecRule::MANDATORY_PARENT => Element::VIDEO,\nSpecRule::ATTR_LISTS => [\n                'track-attrs-subtitles',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
