<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpConsentType
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::CONSENT,\nSpecRule::SPEC_NAME => 'amp-consent [type]',\nSpecRule::UNIQUE => true,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::SATISFIES => [\n                'amp-consent [type]',\n            ],\nSpecRule::REQUIRES => [\n                'meta name=amp-consent-blocking',\n                'amp-consent extension .json script',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-consent',\n            ],\n];";
}
