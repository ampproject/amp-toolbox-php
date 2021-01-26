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

final class ScriptAmpSmartlinks extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::ATTR_LISTS => [
            'common-extension-attrs',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'amp-smartlinks',
        ],
        SpecRule::EXTENSION_SPEC => [
            SpecRule::NAME => 'amp-smartlinks',
            SpecRule::VERSION => [
                '0.1',
                'latest',
            ],
        ],
        SpecRule::EXCLUDES => [
            'amp-link-rewriter',
            'amp-skimlinks',
        ],
    ];
}
