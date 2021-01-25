<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpRecaptchaInput extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::RECAPTCHA_INPUT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-sitekey',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'data-action',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-name-attr',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Element::FORM,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-form',
            'amp-recaptcha-input',
        ],
    ];
}
