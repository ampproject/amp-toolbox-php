<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class ScriptCustomTemplateAmpMustacheAmp4ads extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::SPEC_NAME => 'SCRIPT[custom-template=amp-mustache] (AMP4ADS)',
        SpecRule::ATTR_LISTS => [
            'common-extension-attrs',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4ADS,
        ],
        SpecRule::EXTENSION_SPEC => [
            SpecRule::NAME => 'amp-mustache',
            SpecRule::VERSION => [
                '0.1',
                '0.2',
                'latest',
            ],
            SpecRule::DEPRECATED_VERSION => [
                '0.1',
            ],
            SpecRule::EXTENSION_TYPE => 'CUSTOM_TEMPLATE',
        ],
    ];
}
