<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\ExtensionVersion;
use AmpProject\Validator\Spec\HasExtensionSpec;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class ScriptAmpAccessLaterpay extends Tag implements HasExtensionSpec
{
    use ExtensionVersion;

    const EXTENSION_SPEC = [
        SpecRule::NAME => 'amp-access-laterpay',
        SpecRule::VERSION => [
            '0.1',
            '0.2',
            'latest',
        ],
        SpecRule::REQUIRES_USAGE => 'NONE',
    ];

    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::ATTR_LISTS => [
            'common-extension-attrs',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::EXTENSION_SPEC => self::EXTENSION_SPEC,
        SpecRule::REQUIRES_EXTENSION => [
            Extension::ACCESS,
        ],
    ];
}
