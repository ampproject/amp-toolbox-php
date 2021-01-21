<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AudioTrack
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::TRACK,\nSpecRule::SPEC_NAME => 'audio > track',\nSpecRule::MANDATORY_PARENT => Element::AUDIO,\nSpecRule::ATTR_LISTS => [\n                'track-attrs-no-subtitles',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
