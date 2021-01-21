<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAppBannerButtonOpenButton
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::BUTTON,\nSpecRule::SPEC_NAME => 'amp-app-banner button[open-button]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::OPEN_BUTTON,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ROLE,\n        SpecRule::IMPLICIT => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::TABINDEX,\n        SpecRule::IMPLICIT => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n    ],\n    [\n        SpecRule::NAME => Attribute::VALUE,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'name-attr',\n            ],\nSpecRule::MANDATORY_ANCESTOR => Extension::APP_BANNER,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::SATISFIES => [\n                'amp-app-banner button[open-button]',\n            ],\n];";
}
