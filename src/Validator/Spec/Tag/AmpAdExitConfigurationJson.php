<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAdExitConfigurationJson
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SCRIPT,\nSpecRule::SPEC_NAME => 'amp-ad-exit configuration JSON',\nSpecRule::MANDATORY_PARENT => Extension::AD_EXIT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'application/json',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad-exit/',\nSpecRule::HTML_FORMAT => [\n                Format::AMP4ADS,\n            ],\nSpecRule::SATISFIES => [\n                'amp-ad-exit configuration JSON',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-ad-exit',\n            ],\n];";
}
