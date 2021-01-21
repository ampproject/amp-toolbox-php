<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryCtaLayer
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_CTA_LAYER,\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-STORY-CTA-LAYER animate-in',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::DESCENDANT_TAG_LIST => 'amp-story-cta-layer-allowed-descendants',\nSpecRule::MANDATORY_LAST_CHILD => true,\n];";
}
