<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStickyAd
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STICKY_AD,\nSpecRule::UNIQUE => true,\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-APP-BANNER',\n            ],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 1,\n                'firstChildTagNameOneof' => [\n                    'AMP-AD',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-sticky-ad',\n            ],\n];";
}
