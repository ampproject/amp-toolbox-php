<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpDatePickerTemplateDateTemplate
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::TEMPLATE,\nSpecRule::SPEC_NAME => 'amp-date-picker > template [date-template]',\nSpecRule::MANDATORY_PARENT => Extension::DATE_PICKER,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATE_TEMPLATE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::DEFAULT_,\n    ],\n    [\n        SpecRule::NAME => Attribute::DATES,\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'amp-mustache',\n                    ],\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-mustache',\n            ],\n];";
}
