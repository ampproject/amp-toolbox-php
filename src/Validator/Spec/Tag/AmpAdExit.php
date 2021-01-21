<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAdExit
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::AD_EXIT,\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n                'mandatory-id-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad-exit/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                    Layout::CONTAINER,\n                ],\n            ],\nSpecRule::CHILD_TAGS => [\n                'mandatoryNumChildTags' => 1,\n                'childTagNameOneof' => [\n                    'SCRIPT',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4ADS,\n            ],\nSpecRule::REQUIRES => [\n                'amp-ad-exit configuration JSON',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-ad-exit',\n            ],\n];";
}
