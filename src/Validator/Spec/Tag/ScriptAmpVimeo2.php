<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\ExtensionSpec;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;
use AmpProject\Validator\Spec\TagWithExtensionSpec;

final class ScriptAmpVimeo2 extends Tag implements TagWithExtensionSpec
{
    use ExtensionSpec;

    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'SCRIPT [amp-vimeo] (2)';

    /**
     * Array of extension spec rules.
     *
     * @var array
     */
    const EXTENSION_SPEC = [
        SpecRule::NAME => 'amp-vimeo',
        SpecRule::VERSION => [
            '1.0',
        ],
        SpecRule::VERSION_NAME => 'v1.0',
    ];

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::ATTR_LISTS => [
            AttributeList\CommonExtensionAttrs::ID,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'amp-vimeo 1.0',
        ],
        SpecRule::EXTENSION_SPEC => self::EXTENSION_SPEC,
        SpecRule::EXCLUDES => [
            'amp-vimeo 0.1',
        ],
    ];
}