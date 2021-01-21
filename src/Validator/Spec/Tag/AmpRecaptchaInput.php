<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpRecaptchaInput
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::RECAPTCHA_INPUT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_SITEKEY,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_ACTION,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'mandatory-name-attr',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::MANDATORY_ANCESTOR => Element::FORM,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-form',\n                'amp-recaptcha-input',\n            ],\n];";
}
