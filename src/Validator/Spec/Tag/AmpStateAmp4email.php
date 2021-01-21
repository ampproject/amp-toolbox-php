<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStateAmp4email
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STATE,\nSpecRule::SPEC_NAME => 'amp-state (AMP4EMAIL)',\nSpecRule::ATTR_LISTS => [\n                'mandatory-id-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bind/',\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-LIST',\n                'AMP-STATE',\n                'TEMPLATE',\n            ],\nSpecRule::CHILD_TAGS => [\n                'firstChildTagNameOneof' => [\n                    'SCRIPT',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4ADS,\n                Format::AMP4EMAIL,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-bind',\n            ],\n];";
}
