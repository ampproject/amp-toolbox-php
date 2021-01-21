<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpConsent
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::CONSENT,\nSpecRule::UNIQUE => true,\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES => [\n                'amp-consent extension .json script',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-consent',\n            ],\nSpecRule::EXCLUDES => [\n                'amp-consent [type]',\n            ],\n];";
}
