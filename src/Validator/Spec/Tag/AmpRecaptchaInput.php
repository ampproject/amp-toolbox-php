<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpRecaptchaInput extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::RECAPTCHA_INPUT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_SITEKEY,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::DATA_ACTION,
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-name-attr',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Element::FORM,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::FORM,
            Extension::RECAPTCHA_INPUT,
        ],
    ];
}
